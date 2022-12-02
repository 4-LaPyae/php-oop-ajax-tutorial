<?php
require_once './Notify.php';
class PhoneNotify implements Notify{
    public function send()
    {
        echo "phone notify send!";
    }
}