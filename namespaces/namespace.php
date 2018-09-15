<?php

namespace MyProject;

include 'autoload.php';

use MullenLowe\User as User2;

const TEST = 'HELLO';

class User
{
    public function __toString()
    {
        return 'user1';
    }
}

$user1 = new namespace\User();
$user2 = new User2();
echo $user1; // user1
echo $user2; // user2
echo namespace\TEST; // HELLO