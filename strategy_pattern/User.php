<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once './EmailNotify.php';
require_once './Notify.php';
require_once './PhoneNotify.php';
require_once './SmsNotify.php';
require_once './Notifier.php';
require_once './EmailUser.php';
require_once './PhoneUser.php';
require_once './SmsUser.php';
class User{
    public function __construct()
    {
    //  $notifier = new Notifier();
    //  $notifier->changeNotiType(new PhoneNotify);
    //  $notifier->sendNow();
   $obj = new EmailUser();
   $obj->sendNow();
   echo "<hr>";
   $obj->changeNotiType(new PhoneNotify);
   $obj->sendNow();
   echo "<hr>";
   $obj->changeNotiType(new SmsNotify);
   $obj->sendNow();
    }
    
}
new User();
