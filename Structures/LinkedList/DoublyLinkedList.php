<?php

namespace Structures\LinkedList;

use OutOfRangeException;
use Structures\Interfaces\LinkedList\IDoublyLinkedList;
use Structures\Support\LinkedList\DoublyLinkedListNode;

class DoublyLinkedList
{
    protected ?DoublyLinkedListNode $head = null;
    protected int $length = 0;

    public function getLength(): int
    {
        return $this->length;
    }
    // public function get(int $position): ?DoublyLinkedListNode
    // {
    // }
    // public function getFirst(): ?DoublyLinkedListNode
    // {
    // }
    // public function getLast(): ?DoublyLinkedListNode
    // {
    // }

    public function addFirst(mixed $value): int
    {
        if (is_null($this->head)) {
            $this->head = new DoublyLinkedListNode($value);
        } else {
            $temp = $this->head;
            $this->head = new DoublyLinkedListNode($value);
            $this->head->prev = $temp->prev;
            $temp->prev = $this->head;
            $this->head->next = $temp;
        }

        return ++$this->length;
    }

    public function addLast(mixed $value): int
    {
        $current = $this->head;

        if (is_null($current)) {
            $this->head = new DoublyLinkedListNode($value);
        } else {
            while ($current->next !== null) {
                $current = $current->next;
            }

            $current->next = new DoublyLinkedListNode($value);
            $current->next->prev = $current;
        }

        return ++$this->length;
    }

    public function set(int $position, mixed $value): void
    {
        if ($position < 0 || $position >= $this->length) {
            throw new OutOfRangeException;
        }

        $current = $this->head;

        if ($this->length / 2 > $position) {
            for ($i = 0; $i < $position; $i++) {
                $current = $current->next;
            }
        }
    }

    public function remove(int $position): void
    {
    }
    public function clear(): void
    {
        

        $this->length = 0;
    }
}
