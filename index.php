<?php

require __DIR__ . '/vendor/autoload.php';

use Structures\SinglyLinkedList;

$list = new SinglyLinkedList();

$list->addLast('1');
$list->addLast('2');
$length = $list->addLast('3');
print_r($list->getLast());
print_r($list);
