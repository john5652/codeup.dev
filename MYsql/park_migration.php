<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'billy');
define('DB_PASS', '');

require 'includes/db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS `national_parks`');

$dbc->exec(
 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres FLOAT(12,2) NOT NULL,
    description VARCHAR(10000),
    PRIMARY KEY (id)
  )' 
);

$dbc->exec('DROP TABLE IF EXISTS `users`');

$dbc->exec(
 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
  )'
);