<?php
require "connect.php";
$name = $_POST["name"];
$email = $_POST["email"];
$data = [
    ":user_name"=>"$name",
    ":email"=>"$email",
];
$sql = "insert into users_table (user_name,email) values (:user_name,:email)";
$statement = $db->prepare($sql);
$statement->execute($data);
if($statement){
    echo 1;
}else{
    echo 0;
}