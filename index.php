<?php
// echo phpinfo();
require_once 'Campaign.php';
require_once 'CampaignEmail.php';
require_once 'CampaignSms.php';
require_once 'EmailByMailgun.php';
require_once 'EmailBySendgrid.php';

echo "===========campaign start email================" . '<br>';
$obj = new Campaign(new CampaignEmail('Mailgun'));
$obj->run(['data']);
echo "========campaign end email.=============" . '<br>';

echo "===========campaign start email================" . '<br>';
//$obj = new Campaign(new CampaignEmail('Sendgrid'));
$obj->setCampaign(new CampaignEmail('Sendgrid'));
$obj->run(['data']);
echo "========campaign end email.=============" . '<br>';

echo "==========campaign start sms.==========" . '<br>';
$obj->setCampaign(new CampaignSms());
$obj->run(['data']);
echo "=========campaign end sms.===========" . '<br>';
print_r($obj);