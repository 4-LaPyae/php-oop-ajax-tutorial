<?php
require "connect.php";
    $sql = "SELECT * FROM users_table";
    $statement =$db->query($sql);
    $result =$statement->fetchAll() ;    
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
    

