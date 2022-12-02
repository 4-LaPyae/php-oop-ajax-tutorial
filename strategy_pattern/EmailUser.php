<?php
require_once './Notifier.php';
class EmailUser extends Notifier{
   public function __construct()
   {
    $this->notification = new EmailNotify;
   }
};