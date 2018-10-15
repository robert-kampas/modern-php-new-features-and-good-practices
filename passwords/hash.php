<?php

$postPassword = 'PassW0rd';

try {
    // Create password hash
    $passwordHash = password_hash($postPassword, PASSWORD_DEFAULT, ['cost' => 10]);

    if ($passwordHash === false) {
        throw new Exception('Password hash failed');
    }

    var_dump($passwordHash);
} catch (Exception $e) {
    echo $e->getMessage();
}

