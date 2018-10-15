<?php

$postPassword = 'PassW0rd';
$passwordHash = '$2y$10$skqr70lzbBClBCvXywA8POho/EEPIAdRBII52bbEfTtWaZv68/6oi';

try {
    if (password_verify($postPassword, $passwordHash) === false) {
        throw new Exception('Invalid password');
    }

    $currentHashAlgorithm = PASSWORD_DEFAULT;
    $currentHashOptions = ['cost' => 20];
    $passwordNeedsRehash = password_needs_rehash($passwordHash, $currentHashAlgorithm, $currentHashOptions);

    if ($passwordNeedsRehash === true) {
        // save new hash
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
