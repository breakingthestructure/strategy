<?php

require_once 'interface/CampaignInterface.php';

class CampaignSms implements CampaignInterface
{

    public function run(array $campaign)
    {
        // TODO: Implement run() method.
        echo 'running on sms' . PHP_EOL . '<br>';
    }
}