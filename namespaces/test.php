<?php

namespace Test;

include 'vendor/MullenLowe/Utils.php';

use MullenLowe\Auth;
use MullenLowe\User;
use function MullenLowe\Utils\getUser;
use const MullenLowe\Utils\HELLO;
use const MullenLowe\SPAM;

use MullenLowe\Multi;
use Profero\Agency;

include 'autoload.php';

$auth = new Auth();
$user = new User();

echo '<p>' . getUser('user') . '</p>';
echo '<p>' . HELLO .'</p>';
echo '<p>' . BYE . '</p>';

new Multi();
new Agency();
globalTitle();

echo '<p>' . \MullenLowe\TIMEOUT . '</p>';
echo '<p>' . SPAM . '</p>';


var_dump(__NAMESPACE__);