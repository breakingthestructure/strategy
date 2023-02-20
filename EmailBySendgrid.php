<?php

require_once 'interface/EmailBySendgridInterface.php';

class EmailBySendgrid implements EmailBySendgridInterface
{

    public function send(array $data)
    {
        echo "email sending by sendgrid" . "<br>";
    }
}