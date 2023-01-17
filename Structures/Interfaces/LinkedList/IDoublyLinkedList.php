<?php

namespace Structures\Interfaces\LinkedList;

use Structures\Interfaces\LinkedList\ILinkedList;
use Structures\Support\LinkedList\DoublyLinkedListNode;

interface IDoublyLinkedList extends ILinkedList
{
    public function get(int $position): ?DoublyLinkedListNode;
    public function getFirst(): ?DoublyLinkedListNode;
    public function getLast(): ?DoublyLinkedListNode;
}
