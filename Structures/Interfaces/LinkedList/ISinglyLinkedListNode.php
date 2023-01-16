<?php 

namespace Structures\Interfaces\LinkedList;

use Structures\Support\LinkedList\SinglyLinkedListNode;

interface ISinglyLinkedListNode
{
    public function get(): mixed;
    public function getNext(): ?SinglyLinkedListNode;
}
