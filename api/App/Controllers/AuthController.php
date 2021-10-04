<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response as Response;
use App\DAO\Firebird\EI\TokenDAO;
use App\DAO\Firebird\EI\UserDAO;
use App\DAO\Firebird\EI\VersionDAO;
use App\DAO\Firebird\EI\StaffDAO;
use App\Models\Firebird\EI\TokenModel;
use App\Models\Firebird\EI\UserModel;
use Firebase\JWT\JWT;

final class AuthController
{

    public function active(Request $request, Response $response, array $args): Response
    {
        $versionDAO = new VersionDAO();
        $data = $versionDAO->getAll();
        $response = $response->withJson([
            "data" => $data,
            "message" => "Last versions"
        ]);
        return $response;
    }

    public function login(Request $request, Response $response, array $args): Response
    {
        // get via body
        $data = $request->getParsedBody();
        $email = $data['email'];
        $password = $data['password'];
        // get via query
        if ($email == ''){
            $data = $request->getQueryParams();
            $email = $data['email'];
            $password = $data['password'];
        }
        $userDAO = new UserDAO();
        $user = $userDAO->getByEmail($email);
        //$response->getBody()->write('Teste');
        //var_dump($user);
        if ($user === null) {
            return $response->withStatus(401)->withJson(['message'=>'User not found']);
        } else if (!password_verify($password, $user->getPassword())) {            
            return $response->withStatus(401)->withJson(['message'=>'Invalid password']);;
        }

        $response = $response->withJson($this->buildTokenToUser($user));
        return $response;
    }

    public function login_add(Request $request, Response $response, array $args): Response
    {
        // get via body
        $data = $request->getParsedBody();
        $email = $data['email'];
        $password = $data['password'];
        $name = $data['name'];
        // get via query
        if ($email == ''){
            $data = $request->getQueryParams();
            $email = $data['email'];
            $password = $data['password'];
        }
        $passwordHash = password_hash($password,PASSWORD_ARGON2I);
        $userDAO = new UserDAO();
        if ($userDAO->exists($email)){        
            $userModel = $userDAO->getByEmail($email);
            return $response->withJson([
                $this->buildTokenToUser($userModel),
                'data'=> $userModel->toJson(),
                'message'=>'User already exists']);
        }
        else 
        {
            $userModel = new UserModel();
            // Get staffif from e-mail
            $staffDAO = new StaffDAO();
            $staff = $staffDAO->getByEmail($email);
            $staffid = $staff->getStaffid(); 
            if ($staffid==null){
                $staffid=0;
            }
            // prepare model
            $userModel->setStaffid($staffid);
            $userModel->setEmail($email);
            $userModel->setName($name);
            $userModel->setPassword($passwordHash);
            $userModel = $userDAO->add($userModel);
            //$response->getBody()->write('Teste');
            //var_dump($user);
            if ($userModel->getId() === null) {
                return $response->withStatus(401)->withJson(['message'=>'User not found']);
            } else if (!password_verify($password, $userModel->getPassword())) {            
                return $response->withStatus(401)->withJson(['message'=>'Invalid password']);;
            }
        }
        $response = $response->withJson($this->buildTokenToUser($userModel));
        return $response;
    }


    // LoginStaffOrClient
    public function loginStaffOrClient(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        $email = $data['email'];
        $password = $data['password'];
        $staffDAO = new StaffDAO();
        $userData = $staffDAO->getbyEmail($email);
        if ($userData==null){
            return $response->withStatus(404);
        }
        $userpassword = $userData[0]['PASSWORD'];
        $phpass_hash_strength = 8;
        $phpass_hash_portable = FALSE;

        $hasher = new PasswordHash($phpass_hash_strength, $phpass_hash_portable);
        $converted = $hasher->HashPassword($password);
        // PASSWORD TEST 1603
        if (!$hasher->CheckPassword($password, $userpassword)) {
            return $response->withStatus(401);
        } else {
            // Staff Login            
            $userDAO = new UserDAO();
            $user = $userDAO->getByEmail($email);            
            $user->setEmail($email);
            $user->setPassword($password);
            $data = $this->buildTokenToUser($user);
            $data['email'] = $user->getEmail();
            $response = $response->withJson($data);
            return $response;
        }
    }


    // Refresh the token with new expiration date
    public function refreshToken(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        $refreshToken = $data['refresh_token'];
        $tokenDecoded = JWT::decode(
            $refreshToken,
            getenv('JWT_SECRET_KEY'),
            ['HS256']
        );
        $tokenDAO = new TokenDAO();
        if (!$tokenDAO->verifyRefreshToken($refreshToken))
            return $response->withStatus(401);
        $userDAO = new userDAO();
        $user = $userDAO->getByEmail($tokenDecoded->email);
        if (is_null($user))
            return $response->withStatus(401);
        $tokenDAO->revokeRefreshToken($refreshToken);

        $response = $response->withJson($this->buildTokenToUser($user));
        return $response;
    }

    // POST login/2YES77
    public function loginProfile(Request $request, Response $response, array $args): Response
    {
        $key = $args['profile'];
        $password = 'teste123';
        $userDAO = new userDAO();
        $userEmail = $userDAO->getUserEmailByKey($key);
        if ($userEmail == null) {
            return $response->withStatus(404, 'User not found with key ' . $key);
        }
        $email = $userEmail;
        $userDAO = new UserDAO();
        $user = $userDAO->getByEmail($email);
        $staffDAO = new StaffDAO();
        $staff = $staffDAO->getByEmail($email);
        $staffid = $staff->getStaffid();         
        $staffprofile_base = $staffDAO->getById($staffid);        
        $staffprofile = [];
        foreach ($staffprofile_base as $item)
        {
           $staffprofile[] = array_change_key_case($item, CASE_LOWER);
        }
        if (isset($staffprofile[0]['password'])){
            unset($staffprofile[0]['password']);
        }
        if ($user === null) {
            return $response->withStatus(401, 'User e-mail not found ' . $email);
        } else if (!password_verify($password, $user->getPassword())) {
            return $response->withStatus(401, 'Invalid password');
        }                
        // prepare response data
        $active = $userDAO->is_KeyActive($key);
        $resp = $this->buildTokenToUser($user);
        $resp['last_validation'] = (new \DateTime())->getTimestamp();
        $resp['active'] = $active ? 1 : 0;
        $resp['staff'] = $staffprofile;
        $resp['staffid'] = $staffid;
        $response = $response->withJson($resp);
        return $response;
    }

    // GET login 
    public function loginProfileGet(Request $request, Response $response, array $args): Response
    {
        $data = $request->getHeaders();
        
        // Not exists (authorization)
        if (!isset($data['HTTP_AUTHORIZATION'][0])){
            $resp['timestamp'] = (new \DateTime())->getTimestamp();
            $resp['message'] = 'Token authorization not found';
            $resp['data'][0] = [];
            $response = $response->withJson($resp);
            return $response;
        }
        
        // Exists (authorization)
        $token = trim($data['HTTP_AUTHORIZATION'][0]);

        //remove bearer 
        if (strpos(' ' . $token, 'Bearer') == 1)
            $token = trim(substr($token, 6));

        //remove bearer minusculo
        if (strpos(' ' . $token, 'bearer') == 1)
            $token = trim(substr($token, 6));

        $tokenDAO = new TokenDAO();
        $resp = $tokenDAO->getDataFromToken($token);
        // change CASE
        if ($resp) {
            $records = count($resp);
            $result = [];
            foreach ($resp as $item) {
                $result[] = array_change_key_case($item, CASE_LOWER);
            }
        }
        if (isset($result)){
            $resp = $result[0];
            unset($resp['password']);
            //$resp['token'] = $token;
            $resp['timestamp'] = (new \DateTime())->getTimestamp();
            $data = $resp;
            $resp = [];
            $resp['data'][0] = $data;
            $response = $response->withJson($resp);
        }
        else
        {
            $resp['timestamp'] = (new \DateTime())->getTimestamp();
            $resp['message'] = 'Unknow token: ' . $token;
            $resp['data'][0] = [];
            $response = $response->withJson($resp);
        }
        return $response;
    }

    private function buildTokenToUser(UserModel $user): array
    {

        $expire_at = (new \DateTime())->modify('+2 days')
            ->format('Y-m-d'); // 'Y-m-d H:i:s'

        $tokenPayload = [
            'sub' => $user->getId(),
            'name' => $user->getName(),
            'expired_at' => $expire_at
        ];
        $token = JWT::encode($tokenPayload, getenv('JWT_SECRET_KEY'));

        $refreshtokenPayload = [
            'email' => $user->getEmail(),
            'random' => uniqid()
        ];
        $refreshtoken = JWT::encode($refreshtokenPayload, getenv('JWT_SECRET_KEY'));
        $tokenModel = new TokenModel();
        $tokenModel->setExpired_at($expire_at)
            ->setToken($token)
            ->setRefresh_token($refreshtoken)
            ->setUserId($user->getId());
        $tokenDAO = new TokenDAO();
        $tokenDAO->saveToken($tokenModel);
        return [
            "token" => $token,
            "refresh_token" => $refreshtoken,
            "username" => $user->getName()
        ];
    }

     public function getIdbyEmail(Request $request, Response $response, array $args): Response
     {
        $email = $args['email'];
        $userDAO = new userDAO();
        $user = $userDAO->getByEmail($email);
        if ($user == null) {
            return $response->withStatus(404, 'User not found with email ' . $email);
        }
        if ($user->getId() == null) {
            return $response->withStatus(404, 'User not found with email ' . $email);
        }
        if ($user->getId() <= 0) {
            return $response->withStatus(404, 'User not found with email ' . $email);
        }
        $resp['data']['id'] = $user->getId();
        $resp['data']['staffid'] = $user->getStaffid();
        $resp['message'] = 'Success getting user data';
        $response = $response->withJson($resp);
        return $response;
     }
}





/**
 *
 * Portable PHP password hashing framework.
 *
 * Version 0.4-nrhl / modified by Nordstromrack.com | HauteLook
 *
 * Change Log:
 *
 * - the hash_equals function is now used instead of == or === to prevent
 *   timing attacks
 *
 * Written by Solar Designer <solar at openwall.com> in 2004-2006 and placed in
 *
 * There's absolutely no warranty.
 *
 * The homepage URL for this framework is:
 *
 *  http://www.openwall.com/phpass/
 *
 * Please be sure to update the Version line if you edit this file in any way.
 * It is suggested that you leave the main version number intact, but indicate
 * your project name (after the slash) and add your own revision information.
 *
 * Please do not change the "private" password hashing method implemented in
 * here, thereby making your hashes incompatible.  However, if you must, please
 * change the hash type identifier (the "$P$") to something different.
 *
 * Obviously, since this code is in the public domain, the above are not
 * requirements (there can be none), but merely suggestions.
 *
 * @author Solar Designer <solar@openwall.com>
 */
class PasswordHash
{
    private $itoa64;

    private $iteration_count_log2;

    private $portable_hashes;

    private $random_state;

    /**
     * Constructor
     *
     * @param int $iteration_count_log2
     * @param boolean $portable_hashes
     */
    public function __construct($iteration_count_log2, $portable_hashes)
    {
        $this->itoa64 = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        if ($iteration_count_log2 < 4 || $iteration_count_log2 > 31) {
            $iteration_count_log2 = 8;
        }
        $this->iteration_count_log2 = $iteration_count_log2;
        $this->portable_hashes      = $portable_hashes;
        $this->random_state         = microtime();
        if (function_exists('getmypid')) {
            $this->random_state .= getmypid();
        }
    }

    /**
     * @param  int $count
     * @return String
     */
    public function get_random_bytes($count)
    {
        $output = '';
        if (
            @is_readable('/dev/urandom') &&
            ($fh = @fopen('/dev/urandom', 'rb'))
        ) {
            $output = fread($fh, $count);
            fclose($fh);
        }
        if (strlen($output) < $count) {
            $output = '';
            for ($i = 0; $i < $count; $i += 16) {
                $this->random_state = md5(microtime() . $this->random_state);
                $output .=
                    pack('H*', md5($this->random_state));
            }
            $output = substr($output, 0, $count);
        }

        return $output;
    }

    /**
     * @param  String $input
     * @param  int $count
     * @return String
     */
    public function encode64($input, $count)
    {
        $output = '';
        $i      = 0;
        do {
            $value = ord($input[$i++]);
            $output .= $this->itoa64[$value & 0x3f];
            if ($i < $count) {
                $value |= ord($input[$i]) << 8;
            }
            $output .= $this->itoa64[($value >> 6) & 0x3f];
            if ($i++ >= $count) {
                break;
            }
            if ($i < $count) {
                $value |= ord($input[$i]) << 16;
            }
            $output .= $this->itoa64[($value >> 12) & 0x3f];
            if ($i++ >= $count) {
                break;
            }
            $output .= $this->itoa64[($value >> 18) & 0x3f];
        } while ($i < $count);

        return $output;
    }

    /**
     * @param  String $input
     * @return String
     */
    public function gensalt_private($input)
    {
        $output = '$P$';
        $output .= $this->itoa64[min($this->iteration_count_log2 +
            ((PHP_VERSION >= '5') ? 5 : 3), 30)];
        $output .= $this->encode64($input, 6);

        return $output;
    }

    /**
     * @param  String $password
     * @param  String $setting
     * @return String
     */
    public function crypt_private($password, $setting)
    {
        $output = '*0';
        if (substr($setting, 0, 2) == $output) {
            $output = '*1';
        }
        $id = substr($setting, 0, 3);
        # We use "$P$", phpBB3 uses "$H$" for the same thing
        if ($id != '$P$' && $id != '$H$') {
            return $output;
        }
        $count_log2 = strpos($this->itoa64, $setting[3]);
        if ($count_log2 < 7 || $count_log2 > 30) {
            return $output;
        }
        $count = 1 << $count_log2;
        $salt  = substr($setting, 4, 8);
        if (strlen($salt) != 8) {
            return $output;
        }
        // We're kind of forced to use MD5 here since it's the only
        // cryptographic primitive available in all versions of PHP
        // currently in use.  To implement our own low-level crypto
        // in PHP would result in much worse performance and
        // consequently in lower iteration counts and hashes that are
        // quicker to crack (by non-PHP code).
        if (PHP_VERSION >= '5') {
            $hash = md5($salt . $password, true);
            do {
                $hash = md5($hash . $password, true);
            } while (--$count);
        } else {
            $hash = pack('H*', md5($salt . $password));
            do {
                $hash = pack('H*', md5($hash . $password));
            } while (--$count);
        }
        $output = substr($setting, 0, 12);
        $output .= $this->encode64($hash, 16);

        return $output;
    }

    /**
     * @param  String $input
     * @return String
     */
    public function gensalt_extended($input)
    {
        $count_log2 = min($this->iteration_count_log2 + 8, 24);
        // This should be odd to not reveal weak DES keys, and the
        // maximum valid value is (2**24 - 1) which is odd anyway.
        $count  = (1 << $count_log2) - 1;
        $output = '_';
        $output .= $this->itoa64[$count & 0x3f];
        $output .= $this->itoa64[($count >> 6) & 0x3f];
        $output .= $this->itoa64[($count >> 12) & 0x3f];
        $output .= $this->itoa64[($count >> 18) & 0x3f];
        $output .= $this->encode64($input, 3);

        return $output;
    }

    /**
     * @param  String $input
     * @return String
     */
    public function gensalt_blowfish($input)
    {
        // This one needs to use a different order of characters and a
        // different encoding scheme from the one in encode64() above.
        // We care because the last character in our encoded string will
        // only represent 2 bits.  While two known implementations of
        // bcrypt will happily accept and correct a salt string which
        // has the 4 unused bits set to non-zero, we do not want to take
        // chances and we also do not want to waste an additional byte
        // of entropy.
        $itoa64 = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $output = '$2a$';
        $output .= chr(ord('0') + $this->iteration_count_log2 / 10);
        $output .= chr(ord('0') + $this->iteration_count_log2 % 10);
        $output .= '$';
        $i = 0;
        do {
            $c1 = ord($input[$i++]);
            $output .= $itoa64[$c1 >> 2];
            $c1 = ($c1 & 0x03) << 4;
            if ($i >= 16) {
                $output .= $itoa64[$c1];

                break;
            }
            $c2 = ord($input[$i++]);
            $c1 |= $c2 >> 4;
            $output .= $itoa64[$c1];
            $c1 = ($c2 & 0x0f) << 2;
            $c2 = ord($input[$i++]);
            $c1 |= $c2 >> 6;
            $output .= $itoa64[$c1];
            $output .= $itoa64[$c2 & 0x3f];
        } while (1);

        return $output;
    }

    /**
     * @param String $password
     */
    public function HashPassword($password)
    {
        $random = '';
        if (CRYPT_BLOWFISH == 1 && !$this->portable_hashes) {
            $random = $this->get_random_bytes(16);
            $hash   = crypt($password, $this->gensalt_blowfish($random));
            if (strlen($hash) == 60) {
                return $hash;
            }
        }
        if (CRYPT_EXT_DES == 1 && !$this->portable_hashes) {
            if (strlen($random) < 3) {
                $random = $this->get_random_bytes(3);
            }
            $hash = crypt($password, $this->gensalt_extended($random));
            if (strlen($hash) == 20) {
                return $hash;
            }
        }
        if (strlen($random) < 6) {
            $random = $this->get_random_bytes(6);
        }
        $hash = $this->crypt_private(
            $password,
            $this->gensalt_private($random)
        );
        if (strlen($hash) == 34) {
            return $hash;
        }
        // Returning '*' on error is safe here, but would _not_ be safe
        // in a crypt(3)-like function used _both_ for generating new
        // hashes and for validating passwords against existing hashes.
        return '*';
    }

    /**
     * @param String $password
     * @param String $stored_hash
     * @return boolean
     */
    public function CheckPassword($password, $stored_hash)
    {
        $hash = $this->crypt_private($password, $stored_hash);
        if ($hash[0] == '*') {
            $hash = crypt($password, $stored_hash);
        }

        return hash_equals($stored_hash, $hash);
    }
}
