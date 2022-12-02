
<?php
$db = new PDO('mysql:dbhost=localhost;dbname=test', 'root', 'Hello*124#', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]);

if($db){
    echo "connection successful<br>";
}else{
    echo "connection fail!";
}