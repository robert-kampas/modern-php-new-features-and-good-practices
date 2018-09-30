<?php

include 'Sharable.php';
include 'Post.php';

$post = new Post();

echo $post->shareFacebook() . "\n";

$post->setApiKey('abc123');
echo $post->getApiKey() . "\n";
