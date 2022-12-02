<?php
$json_string = "my.json";
$jsondata = file_get_contents($json_string);
echo "<pre>".print_r($jsondata)."</pre>";
echo "<hr>";
$arr = json_decode($jsondata);
echo "<pre>".print_r($arr)."</pre>";
return;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json</title>Document
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2>Welcome Yangon</h2>
    <div id="loaddata"></div>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(document).ready(function(){
           $.getJSON(
            "my.json",
            function(data){
                console.log(data);
               $.each(data,function(key,value){
                $("#loaddata").append(value.name+" "+value.age +"<br>")
               })
            }
           )
        })
    </script>
</body>
</html>