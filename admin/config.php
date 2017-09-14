<?php
// HTTP
define('HTTP_SERVER', 'http://west.gregzorb.com/admin/');
define('HTTP_CATALOG', 'http://west.gregzorb.com/');

// HTTPS
define('HTTPS_SERVER', 'http://west.gregzorb.com/admin/');
define('HTTPS_CATALOG', 'http://west.gregzorb.com/');

// DIR
define('DIR_APPLICATION', '/var/www/west.gregzorb.com/admin/');
define('DIR_SYSTEM', '/var/www/west.gregzorb.com/system/');
define('DIR_IMAGE', '/var/www/west.gregzorb.com/image/');
#define('DIR_STORAGE', '/var/www/west.storage/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', '/var/www/west.gregzorb.com/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'west');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'west');
define('DB_PORT', '3306');
define('DB_PREFIX', 'wst_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
