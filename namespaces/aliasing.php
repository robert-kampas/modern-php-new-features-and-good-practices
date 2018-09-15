<?php

namespace MyProject;

include 'autoload.php';
include 'vendor/MullenLowe/Utils.php';

use MullenLowe\User as User;

// this is the same as use MullenLowe\User as MullenLowe\User as User
//use MullenLowe\User;

// importing a global class
use Exception;

// importing a function (PHP 5.6+)
use function MullenLowe\Utils\getUser as getMyUser;

// importing a constant (PHP 5.6+)
use const MullenLowe\Utils\CONSTANT;

echo new User();
echo getMyUser('test');
echo CONSTANT;