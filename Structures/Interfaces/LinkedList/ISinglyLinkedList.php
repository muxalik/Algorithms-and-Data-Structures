<?php

namespace Structures\Interfaces\LinkedList;

use Structures\Interfaces\LinkedList\ILinkedList;
use Structures\Support\LinkedList\SinglyLinkedListNode;

interface ISinglyLinkedList extends ILinkedList
{
    public function get(int $position): ?SinglyLinkedListNode;
    public function getFirst(): ?SinglyLinkedListNode;
    public function getLast(): ?SinglyLinkedListNode;
}
