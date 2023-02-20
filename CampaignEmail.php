<?php

require_once 'interface/CampaignInterface.php';

class CampaignEmail implements CampaignInterface
{
    private $service = NULL;

    public function __construct($serviceName) {
        switch ($serviceName) {
            case "Mailgun":
                $this->service = new EmailByMailgun();
                break;
            case "Sendgrid":
                $this->service = new EmailBySendgrid();
                break;
        }
    }

    /**
     * @param EmailByMailgunInterface $service
     */
    public function setService(EmailByMailgunInterface $service)
    {
        $this->service = $service;
    }

    public function run(array $campaign)
    {
        // TODO: Implement run() method.
        echo 'running on email' . PHP_EOL . '<br>';
        $this->send(['data']);
    }

    public function send(array $data)
    {
        // TODO: Implement send() method.
//        echo "sending email by mail gun";
        $this->service->send(['data']);
    }
}