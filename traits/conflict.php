<?php

trait shareFacebook {
    public function share() {
        return 'facebook';
    }
}

trait shareTwitter {
    public function share() {
        return 'twitter';
    }
}

class Post
{
    use shareFacebook, shareTwitter {
        shareFacebook::share insteadof shareTwitter;
        shareTwitter::share as shareTwitter;
    }
}

$post = new Post();
echo $post->share();
echo $post->shareTwitter();