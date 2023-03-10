<?php

namespace Structures\Support\LinkedList;

class SinglyLinkedListNode
{
    public mixed $value;
    public ?SinglyLinkedListNode $next;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }
}