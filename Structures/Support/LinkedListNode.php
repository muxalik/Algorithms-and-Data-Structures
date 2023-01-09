<?php

namespace Structures\Support;

class LinkedListNode
{
    public mixed $value;
    public ?LinkedListNode $next;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }
}
