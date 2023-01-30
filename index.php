<?php

require __DIR__ . '/vendor/autoload.php';

use Structures\LinkedList\DoublyLinkedList;

$list = new DoublyLinkedList();
$list->addFirst(12);
$list->addLast(11);
$list->addLast(853);
$list->remove(1);

print_r($list);