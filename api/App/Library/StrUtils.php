<?php 

namespace App\Library;

final class StrUtils {

    static function clearStr($id){
        $LetraProibi = Array(",",".","'","\"","&","|","!","#","$","¨","*","(",")","`","´","<",">",";","=","+","§","{","}","[","]","^","~","?","%");
        $special = Array('Á','È','ô','Ç','á','è','Ò','ç','Â','Ë','ò','â','ë','Ø','Ñ','À','Ð','ø','ñ','à','ð','Õ','Å','õ','Ý','å','Í','Ö','ý','Ã','í','ö','ã',
        'Î','Ä','î','Ú','ä','Ì','ú','Æ','ì','Û','æ','Ï','û','ï','Ù','®','É','ù','©','é','Ó','Ü','Þ','Ê','ó','ü','þ','ê','Ô','ß','‘','’','‚','“','”','„');
        $clearspc = Array('a','e','o','c','a','e','o','c','a','e','o','a','e','o','n','a','d','o','n','a','o','o','a','o','y','a','i','o','y','a','i','o','a',
        'i','a','i','u','a','i','u','a','i','u','a','i','u','i','u','','e','u','c','e','o','u','p','e','o','u','b','e','o','b');
        $newId = str_replace($special, $clearspc, $id);
        $newId = str_replace($LetraProibi, "", trim($newId));
        return $newId;
    }
     
    /* Converte chaves de um objeto em lower */
    static function result_obj_key_to_lower( $row )
    {
        if ( !$row ) {
            return $row;
        }
        else
        {
            $rowconv = (array) $row;
            $rowconv = array_change_key_case( $rowconv, CASE_LOWER );
            for ($i=0;$i<count($rowconv);$i++){
                if ( isset( $rowconv[$i] ) ){
                    if ( is_array( $rowconv[$i] ) ){
                        $rowconv[$i] = array_change_key_case( $rowconv[$i], CASE_LOWER );
                    }
                }
            }
            $newrow = (object) $rowconv;
        }
        return $newrow;
    }


    /* Converte chaves de um objeto em lower */
    static function result_array_key_to_lower( $row )
    {
        if ( !$row ) {
            return $row;
        }
        else
        {
            $newrow = $row;
            if ( is_array( $row ) ){
                $rowconv = $row;
                $rowconv = array_change_key_case( $rowconv, CASE_LOWER );
                for ($i=0;$i<count($rowconv);$i++){
                    if ( isset( $rowconv[$i] ) ){
                        if ( is_array( $rowconv[$i] ) ){
                            $rowconv[$i] = array_change_key_case( $rowconv[$i], CASE_LOWER );
                        }
                    }
                }
                $newrow = $rowconv;
            }
            return $newrow;
        }
        
    }

}