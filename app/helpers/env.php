<?php

/** In locahost URL_BASE is ignored */
define('URL_BASE', "{$_SERVER['HTTP_HOST']}");
// define('URL_PATH', "/amsted/supplier-portal");
define('PER_PAGE', 8);

define('LOCAL_DATABASE_HOST', 'localhost');
define('LOCAL_DATABASE_DBNAME', 'market');
define('LOCAL_DATABASE_USERNAME', 'root');
define('LOCAL_DATABASE_PASSWORD', 'accessByRoot');


/** define language to messages validations */
define('LANG', 'pt-br'); //define portuguese as language default to messages 
// define('LANG', 'en'); //define english as language default to messages


/** variables for control type toastify */
define('TOASTIFY_DANGER', 'danger');
define('TOASTIFY_INFO', 'info');
define('TOASTIFY_SUCCESS', 'success');
define('TOASTIFY_WARNING', 'warning');






/** Constants for routes */
$baseUrl = URL_BASE;
// define('ADMIN_USERS_CREATE', "http://{$baseUrl}/admin/users/create");