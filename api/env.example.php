<?php

putenv('JWT_SECRET_KEY=' . '');
putenv('DISPLAY_ERRORS_DETAIL='.true);
# Necessary in global workspaces case managed from only one copy of the software
# using header (workspace) parameter into RESTFul request
putenv('EI_WORKSPACES_DATABASE_PATH=' . '/serv/ei/dados/workspaces/' );
# Default configurations
putenv('EI_DRIVER=' . 'ibase');
putenv('EI_SERVER=' . 'localhost');
putenv('EI_DATABASE=' . '/data/base.gdb' );
putenv('EI_USERNAME=' . '' );
putenv('EI_PASSWORD=' . '');
putenv('EI_PORT=' . '3050');
putenv('EI_UPLOAD=' . __DIR__ . '/../webmodule/uploads');
putenv('EI_SECRET=' . '123456' );
putenv('EI_TOKEN=' . '00');
putenv('EI_BASE_URL=' . 'http://localhost/gestorequipes');
putenv('EI_BASE_WEBMODULE_URL=' . getenv('EI_BASE_URL') . '/webmodule');
putenv('EI_BASE_WORKSPACE_URL=' . getenv('EI_BASE_URL') . '/api_workspace/v1');
putenv('EI_DOWNLOAD_URL=' . getenv('EI_BASE_WEBMODULE_URL') . '/download');
/* User e-mail to webmodule login. Used in cases if can get inverse information 
this api getting data from webmodule (example: reports) */
putenv('EI_ADMIN_EMAIL=' . 'email@gmail.com');
/* Get app_enc_key from webmodule config file, necessary to login with 
"webmodule->authentication/do" */
putenv('EI_ADMIN_APP_ENC_KEY=' . '00000000000000000000000000000000');
/* AUTOINC, used to identify the tables are converted to AUTOINC fields "Firebird 3.0" */
putenv('EI_AUTOINC','STAFFTASKS');
putenv('EI_API_KEY', '0x0AFTTE1kasdjaskldu912381923812');
putenv('REPORT_HEADER='. 'officeWorld<br>http://officeworld.io');
