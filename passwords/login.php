<?php

$postPassword = 'PassW0rd';
$passwordHash = '$2y$12$ZHyUFGAs63VQek34h7L7YeIC6xOwKH1CMY6ILqfaKHwEm..thxqK.';

try {
    if (password_verify($postPassword, $passwordHash) === false) {
        throw new Exception('Invalid password');
    } else {
        echo 'Logged in!';
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
