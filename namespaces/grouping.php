<?php

namespace Test;

include 'autoload.php';

use MullenLowe\{Auth, Multi, Utils as Utilities};

new Auth();

throw new \Exception('Division by zero.');