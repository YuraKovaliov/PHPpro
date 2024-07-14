<?php

require 'vendor/autoload.php';

use Overload\User;
use Overload\CustomException;

try {
    $user = new User();
    $user->setName('John Doe');
    $user->setAge(30);
    $user->setEmail('john@example.com');

    $data = $user->getAll();
    print_r($data);
} catch (CustomException $e) {
    echo "Error: " . $e->getMessage();
}

?>

