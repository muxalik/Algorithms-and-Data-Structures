<?php

require __DIR__ . '/vendor/autoload.php';

use Structures\LinkedList\DoublyLinkedList;


$list = new DoublyLinkedList();
$list->addFirst(12);
$list->addFirst(654);
$list->addFirst(4);
$list->clear();

print_r($list);