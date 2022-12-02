<?php
require "connect.php";
$limit_per_page= 3;
$limit_page = "";
if($_POST['idvalue']){
$limit_page = $_POST["idvalue"];
}else{
    $limit_page = 1;
}
$offset = ($limit_page - 1)* $limit_per_page;
$sql = "SELECT * FROM users_table LIMIT $limit_per_page OFFSET $offset";
$statement =$db->query($sql);
$result =$statement->fetchAll() ;  
$output = "";  
if($statement->rowCount() >0){
    $output .= '
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Operation</th>
        </tr>
    </thead>
    <tbody>';
foreach ($result as $user) {
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
$output .= "</tbody></table>";
$output .= '<nav aria-label="...">
<ul class="pagination pagination-sm justify-content-center" id="acontainer">';
$sql_total = "SELECT * FROM users_table";
$sql_statement =$db->query($sql_total);
$sql_result =$sql_statement->fetchAll() ;
$total = ceil(count($sql_result)/$limit_per_page);
//var_dump(count($sql_result)/$limit_per_page);

for($i = 1;$i <= $total;$i++){
    if($i == $limit_page){
        $class_name = "active";
    }else{
        $class_name = "";
    }
  $output .="<li class='page-item $class_name'>
        <a class='page-link' id='$i' href=''>$i</a>
   </li>";
}
$output .='</ul></nav>';
echo $output;
$db= null;
}else{
    echo "<h2>No users found!</h2>";
}
    