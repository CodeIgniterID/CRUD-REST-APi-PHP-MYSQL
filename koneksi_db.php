<?php
define('HOST','localhost');
define('USER','root');
define('DB','php_api');
define('PASS','123');

$db = new mysqli(HOST,USER,PASS,DB) or die('Connetion error to the database'); ?>