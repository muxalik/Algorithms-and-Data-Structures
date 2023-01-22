<?php

namespace Structures\LinkedList;

use OutOfRangeException;
use Structures\Interfaces\LinkedList\IDoublyLinkedList;
use Structures\Support\LinkedList\DoublyLinkedListNode;

class DoublyLinkedList implements IDoublyLinkedList
{
    protected ?DoublyLinkedListNode $head = null;
    protected int $length = 0;
    
    /**
     * Get length
     *
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }
    
    /**
     * Get node by position
     *
     * @param  int $position
     * @return ?DoublyLinkedListNode
     */
    public function get(int $position): ?DoublyLinkedListNode
    {
        $current = $this->head;

        for ($i = 0; $i < $position; $i++) {
            $current = $current->next;
        }

        return $current;
    }
    
    /**
     * Get first node
     *
     * @return ?DoublyLinkedListNode
     */
    public function getFirst(): ?DoublyLinkedListNode
    {
        return $this->head;
    }    
    /**
     * Get last node
     *
     * @return ?DoublyLinkedListNode
     */
    public function getLast(): ?DoublyLinkedListNode
    {
        $current = $this->head;

        while ($current->next) {
            $current = $current->next;
        }

        return $current;
    }

    /**
     * Add new node to start
     *
     * @param  mixed $value
     * @return int
     */
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

    /**
     * Add new node to the end
     *
     * @param  mixed $value
     * @return int
     */
    public function addLast(mixed $value): int
    {
        $current = $this->head;

        if (is_null($current)) {
            $this->head = new DoublyLinkedListNode($value);
        } else {
            while ($current->next) {
                $current = $current->next;
            }

            $current->next = new DoublyLinkedListNode($value);
            $current->next->prev = $current;
        }

        return ++$this->length;
    }

    /**
     * Set new value of existing node
     *
     * @param  int $position
     * @param  mixed $value
     * @return void
     */
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

    /**
     * Delete a specific node
     *
     * @param  int $position
     * @return void
     */
    public function remove(int $position): void
    {
        if ($position < 0 || $position >= $this->length) {
            throw new OutOfRangeException;
        }

        $current = $this->head;

        for ($i = 0; $i < $position - 1; $i++) {
            $current = $current->next;
        }

        $prev = $current;
        $current = $current->next;
        $next = $current->next;

        unset($current);

        $prev->next = $next;
        $next->prev = $prev;

        $this->length--;
    }

    /**
     * Delete all nodes
     *
     * @return void
     */
    public function clear(): void
    {
        $current = $this->head;

        while ($current) {
            unset($current->prev);
            $current = $current->next;
        }

        $this->head = null;
        $this->length = 0;
    }
}
