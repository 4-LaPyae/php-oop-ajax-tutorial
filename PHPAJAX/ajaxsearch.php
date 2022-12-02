<?php
require "connect.php";
$searchvalue = $_POST['searchname'];
    $sql = "SELECT * FROM users_table WHERE user_name LIKE '%{$searchvalue}%'";
    $statement =$db->query($sql);
    $result =$statement->fetchAll() ;    
    if($statement->rowCount() >0){
        $output = '
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
    $output .= "</tbody>";
    
    echo $output;
    
    $db= null;
    
    }else{
        echo "<h2>No users found!</h2>";
    }
        