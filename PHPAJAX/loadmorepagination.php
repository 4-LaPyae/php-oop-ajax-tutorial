<?php
require "connect.php";
$limit_page = 5;
$page="";
if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
}else{
    $page = 0;
}
$sql = "SELECT * FROM users_table LIMIT $limit_page OFFSET $page";
$statement =$db->query($sql);
$result =$statement->fetchAll() ; 
$output = "";  
if($statement->rowCount() > 0){
foreach ($result as $user) {
    //$lastid = $user->id;
    $output .= "<tr>
    <td>$user->id</td>
    <td>$user->user_name</td>
    <td>$user->email</td>
    <td>
    <button class='btn btn-outline-success' data-id='$user->id' id='editbtn'>Edit</button>
    <button class='btn btn-outline-danger' data-id='$user->id' id='deletebtn'>Delete</button>
    </td>
    </tr>";
}
$output .="<tr id='ajaxbtn'>
<td colspan='4'><button id='loadbtn' class='btn btn-outline-primary' data-id='5'>load more</button></td>
</tr>";
echo $output;
}else{
    echo "";
}