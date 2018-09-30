<?php

trait Sharable {
    private $apiKey;

    public function shareFacebook() {
        return 'facebook';
    }

    public function shareTwitter() {
        return 'twitter';
    }

    public function setApiKey($apiKey) {
        $this->apiKey = $apiKey;
    }

    public function getApiKey() {
        return $this->apiKey;
    }
}