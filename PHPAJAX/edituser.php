<?php
require "connect.php";
$name = $_POST['name'];
$email = $_POST['email'];
$id = $_POST['id'];
$data = [
    'user_name' => $name,
    'email' => $email,
    'id' => $id,
];
$sql = "UPDATE users_table SET user_name=:user_name, email=:email WHERE id=:id";
$stmt= $db->prepare($sql);
$stmt->execute($data);
if($stmt){
    echo 1;
}else{
    echo 0;
}