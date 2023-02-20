<?php

require_once 'interface/EmailByMailgunInterface.php';

class EmailByMailgun implements EmailByMailgunInterface
{
    public function send(array $data)
    {
        echo "email sending by mailgun" . "<br>";
    }
}