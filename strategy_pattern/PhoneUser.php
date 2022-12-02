<?php 
require_once "./Notifier.php";
require_once './PhoneNotify.php';
class PhoneUser extends Notifier{
    public function __construct()
    {
        $this->notification = new PhoneNotify;
    }
}