<?php
function inputField($type,$name,$value,$placeHolder){
$result = "<div>
            <input type='$type' name='$name' value='$value' placeholder='$placeHolder'>
        </div>";
       echo $result;
}