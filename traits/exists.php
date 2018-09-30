<?php

trait Share
{
    public function getApiKey() {
        return $this->apiKey;
    }
}

class Post
{
    use Share;

    private $apiKey;
}

$post = new Post();
$post->getApiKey();