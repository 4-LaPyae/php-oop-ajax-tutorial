<?php
include_once "connect.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $image = $_FILES['photo'];
    $image_filename = $image['name'];
    $image_tmpname = $image['tmp_name'];
    // print_r(__DIR__);
    move_uploaded_file($image_tmpname,__DIR__.'/images/'.$image_filename);
    $extension = substr($image_filename,strlen($image_filename)-4,strlen($image_filename));
    //print_r($extension);
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    if(in_array($extension,$allowed_extensions)){
        // var_dump($image_filename);
        // var_dump($upload_image);
        $data = [
            'name' => $name,
            'mobile' => $mobile,
            'image' => $upload_image,
        ];
        $sql = "INSERT INTO image_upload (name, mobile, image) VALUES (:name, :mobile, :image)";
        $stmt= $db->prepare($sql);
        $stmt->execute($data);
        if($stmt){
            echo "<script>alert(\"data insert successful \")</script>";
        }else{
            echo "no data insert";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">name</th>
      <th scope="col">image</th>
      <th scope="col">mobile</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "select * from image_upload";
    $results = $db->query($sql);
    $datas = $results->fetchAll();
    echo "<pre>".var_dump($results)."</pre>";
    ;
    ?>
    <?php foreach($datas as $result): ?>
    <tr>
      <th scope="row"><?php echo $result->id ?></th></th>
      <td><?php echo $result->name ?></td>
      <td><img src="<?php echo $result->image ?>" width="100px" alt="profile"/></td>
      <td><?php echo $result->mobile ?></td>
    </tr> 
    <?php endforeach; ?>
    <tr>
      <th scope="row">14</th></th>
      <td><?php echo "jisoo" ?></td>
      <td><img src="<?php echo "file:///home/sithu/Pictures/Jisoo/jisoo2.jpg" ?>" width="100px" alt="profile"/></td>
      <td><?php echo 384858 ?></td>
    </tr> 
  </tbody>
</table>
</body>
</html>