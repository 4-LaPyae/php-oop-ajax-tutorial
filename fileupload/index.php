<?php
include_once 'operation.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
    <link href="" rel="stylesheet">
</head>
<body>
    <form action="display.php" method="POST" enctype="multipart/form-data">
    <?php  
  inputField("text","name","","enter name") ;
  inputField("text","mobile","","enter mobile");
  inputField("file","photo","","");
 ?>
 <button type="submit" name="submit">Submit</button>
    </form>
 
</body>
</html>