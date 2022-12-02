<?php
$dbhost = "localhost";
$dbuser = "user";
$dbpsw = "Hello*124#";
$dbname = "test";
$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpsw);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
define("APP_NAME","PHP REST API TUTORIAL");