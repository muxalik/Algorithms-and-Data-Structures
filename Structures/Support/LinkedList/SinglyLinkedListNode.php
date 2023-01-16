<?php

namespace Structures\Support\LinkedList;

use Structures\Interfaces\LinkedList\ISinglyLinkedListNode;

class SinglyLinkedListNode implements ISinglyLinkedListNode
{
    private mixed $value;
    private ?SinglyLinkedListNode $next;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }

    public function get(): mixed
    {
        return $this->value;
    }

    public function getNext(): ?SinglyLinkedListNode
    {
        return $this->next;
    }
}