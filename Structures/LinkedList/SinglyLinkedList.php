<?php

namespace Structures\LinkedList;

use OutOfRangeException;
use Structures\Support\LinkedList\SinglyLinkedListNode;
use Structures\Interfaces\LinkedList\ISinglyLinkedList;

class SinglyLinkedList implements ISinglyLinkedList
{
    protected ?SinglyLinkedListNode $head = null;
    protected int $length = 0;

    public function addFirst(mixed $value): int
    {
        $head = $this->head;
        $this->head = new SinglyLinkedListNode($value);
        $this->head->next = $head;

        return ++$this->length;
    }

    public function addLast(mixed $value): int
    {
        $current = $this->head;

        if (is_null($current)) {
            $this->head = new SinglyLinkedListNode($value);
        } else {
            while ($current->next !== null) {
                $current = $current->next;
            }

            $current->next = new SinglyLinkedListNode($value);
        }

        return ++$this->length;
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

    public function get(int $position): ?SinglyLinkedListNode
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

    public function getFirst(): ?SinglyLinkedListNode
    {
        return $this->head ?? null;
    }

    public function getLast(): ?SinglyLinkedListNode
    {
        $current = $this->head ?? null;

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

        if (!$position) {
            $this->head = $this->head->next;
            return;
        }

        $current = $this->head;

        for ($i = 0; $i < $position - 1; $i++) {
            $current = $current->next;
        }

        $current->next = $current->next->next;
    }

    public function clear(): void
    {
        if (! is_null($this->head)) {
            unset($this->head);
            $this->length = 0;
        }
    }
}
