<?php

class Campaign
{
    private $campaign = NULL;

    public function __construct(CampaignInterface $campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * @param CampaignInterface $campaign
     */
    public function setCampaign(CampaignInterface $campaign)
    {
        $this->campaign = $campaign;
    }

    public function run($campaign) {
        $this->campaign->run($campaign);
    }
}