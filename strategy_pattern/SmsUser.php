<?php
require_once './Notifier.php';
require_once './SmsNotify.php';
class SmsUser extends Notifier{
    public function __construct()
    {
        $this->notification = new SmsNotify;
    }
}