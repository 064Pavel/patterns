<?php

use Iterator\FriendsIterator;
use Iterator\User;

require_once 'User.php';
require_once 'FriendsIterator.php';

$user1 = new User("Alice");
$user1->addFriend("Bob");
$user1->addFriend("Deny");
$user1->addFriend("Charlie");

$user2 = new User("Bob");
$user2->addFriend("Alice");
$user2->addFriend("David");


$friends = $user1->getFriends();
$collection = new FriendsIterator($friends);

foreach ($collection as $friend) {
    echo $friend . "\n";
}