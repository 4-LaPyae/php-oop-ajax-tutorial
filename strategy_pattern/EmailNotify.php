<?php
require_once './Notify.php';
    class EmailNotify implements Notify{
        public function send()
        {
            echo "email notify send!";
        }
    }