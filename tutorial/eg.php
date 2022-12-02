<?php
   if(isset($_POST['submit'])){
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      print_r($_FILES['image']);
      print_r($errors);
      $folder = "images/".$file_name;
      move_uploaded_file($file_tmp,$folder);
      //echo "<img src='$folder' width='100px'/>";
   }
?>
<html>
   <body>
      
      <form action="eg.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit" name="submit"/>
      </form>
      
   </body>
</html>