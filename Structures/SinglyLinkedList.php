<?php

namespace Structures;

use Structures\Support\LinkedListNode;
use OutOfRangeException;
use Structures\Interfaces\ILinkedList;

class SinglyLinkedList implements ILinkedList
{
    protected ?LinkedListNode $head;
    protected int $length;

    public function __construct()
    {
        $this->head = null;
        $this->length = 0;
    }

    public function addFirst(mixed $value): int
    {
        $head = $this->head;
        $this->head = new LinkedListNode($value);
        $this->head->next = $head;

        return $this->length++;
    }

    public function addLast(mixed $value): int
    {
        $current = $this->head;

        if (is_null($current)) {
            $this->head = new LinkedListNode($value);
        } else {
            while ($current->next !== null) {
                $current = $current->next;
            }

            $current->next = new LinkedListNode($value);
        }

        return $this->length++;
    }

    public function set(int $position, mixed $value): void
    {
        if ($position < 0 || $position >= $this->length) {
            throw new OutOfRangeException;
        }

        $current = $this->head;

        for ($i = 0; $i < $position; $i++) {
            $current = $current->next;
        }

        $current->value = $value;
    }

    public function get(int $position): ?LinkedListNode
    {
        if ($position < 0 || $position >= $this->length) {
            throw new OutOfRangeException;
        }

        $current = $this->head;

        for ($i = 0; $i < $position; $i++) {
            $current = $current->next;
        }

        return $current;
    }

    public function getFirst(): ?LinkedListNode
    {
        return $this->head;
    }

    public function getLast(): ?LinkedListNode
    {
        $current = $this->head;

        for ($i = 0; $i < $this->length - 1; $i++) {
            $current = $current->next;
        }

        return $current;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function remove(int $position): void
    {
        if ($position < 0 || $position >= $this->length) {
            throw new OutOfRangeException;
        }

        $current = $this->head;

        for ($i = 0; $i < $position - 1; $i++) {
            $current = $current->next;
        }

        $current->next = $current->next->next;
    }

    public function clear(): void
    {
        unset($this->head);
    }
}
