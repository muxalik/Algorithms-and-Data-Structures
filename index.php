<?php

require __DIR__ . '/vendor/autoload.php';

use Structures\SinglyLinkedList;

$list = new SinglyLinkedList();

$list->addLast(1);
$list->addFirst(-20);
$list->addLast(132);
$list->remove(1);

print_r($list);