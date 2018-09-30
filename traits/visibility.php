<?php

trait Share {
    public function share() {
        return 'facebook';
    }
}

class Post
{
    use Share { share as protected; }
}

$post = new Post();
echo $post->share();
