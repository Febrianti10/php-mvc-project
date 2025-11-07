<?php
// Railway menyediakan MySQL variables otomatis
return [
    'host' => getenv('MYSQLHOST') ?: '127.0.0.1',
    'port' => getenv('MYSQLPORT') ?: '3306',
    'dbname' => getenv('MYSQLDATABASE') ?: 'mvc_db',
    'username' => getenv('MYSQLUSER') ?: 'root',
    'password' => getenv('MYSQLPASSWORD') ?: '',
    'charset' => 'utf8mb4'
];
