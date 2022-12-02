<?php
require_once './Notify.php';
class SmsNotify implements Notify{
    public function send()
    {
        echo "sms notify send!";
    }
}