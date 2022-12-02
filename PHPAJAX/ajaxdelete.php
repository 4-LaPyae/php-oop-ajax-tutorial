<?php
require "connect.php";
$dataid = $_POST['id'];
$sql = "delete from users_table where id=?";
$statement = $db->prepare($sql);
$statement->execute([$dataid]);
if($statement){
    echo 1;
}else{
    echo 0;
}
