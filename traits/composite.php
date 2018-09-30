<?php

trait shareFacebook
{
    public function shareFacebook() {
        return 'facebook';
    }
}

trait shareTwitter
{
    public function shareTwitter() {
        return 'twitter';
    }
}

trait Share {
    use shareFacebook, shareTwitter;
}

class Post
{
    use Share;
}

$post = new Post();
echo $post->shareFacebook(); // facebook
echo $post->shareTwitter(); // twitter