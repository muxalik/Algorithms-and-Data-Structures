<?php

namespace Structures\Support\LinkedList;

class DoublyLinkedListNode
{
    public mixed $value;
    public ?DoublyLinkedListNode $next;
    public ?DoublyLinkedListNode $prev;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
        $this->prev = null;
    }
}
