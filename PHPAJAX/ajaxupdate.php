<?php
require "connect.php";
$editid = $_POST['id'];
$sql = "select * from users_table where id=$editid";
$statement =$db->query($sql);
$result =$statement->fetchAll() ;
$output = "
         <form>
            <input type='text' name='editid' hidden id='editid' value='{$result[0]->id}'>
                <label for='name'>Name:</label>
                <input type='text' name='editname' id='editname' value='{$result[0]->user_name}'>
                <label for='email'>Email:</label>
                <input type='text' name='editemail' id='editemail' value='{$result[0]->email}'>
                <input type='submit' id='editsavebtn' class='mt-2' value='Save'>
            </form>
";
echo $output;
$db= null;
?>