<?php

// database config 
// change to your own environment configuration
defined('DB_ENGINE') ? null : define('DB_ENGINE', 'ORACLE');
//DB_ENGINE can be either ORACLE or MYSQL
//just change this line and switch db, if your are using CRUDObject class 
//your code will work without any changes

if (DB_ENGINE == 'ORACLE') {
//! it is my config - your parameters are different...
    defined('DB_SERVER') ? null : define('DB_SERVER', 'localhost');
    defined('DB_PORT')   ? null : define('DB_PORT', '1521');
    defined('DB_USER')   ? null : define('DB_USER', 'BR');
    defined('DB_PASS')   ? null : define('DB_PASS', 'br');
    defined('DB_NAME')   ? null : define('DB_NAME', 'XE');

} else if (DB_ENGINE == 'MYSQL'){
//! it is my config - your parameters are different...    
    defined('DB_SERVER') ? null : define('DB_SERVER', 'localhost');
    defined('DB_USER')   ? null : define('DB_USER', 'CRUDObjects_user');
    defined('DB_PASS')   ? null : define('DB_PASS', 'abc123');
    defined('DB_NAME')   ? null : define('DB_NAME', 'CRUDObjects_example');
}