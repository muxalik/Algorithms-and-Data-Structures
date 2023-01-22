<?php

require __DIR__ . '/vendor/autoload.php';

use Structures\LinkedList\DoublyLinkedList;

$list = new DoublyLinkedList();
$list->addFirst(12);
$list->addLast(11);
$list->addLast(853);
$list->addLast(154);
$list->addLast(64);
$list->addLast(43);

print_r($list->getFirst());