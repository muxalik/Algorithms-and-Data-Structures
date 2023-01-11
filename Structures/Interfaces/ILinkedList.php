<?php

namespace Structures\Interfaces;

use Structures\Support\LinkedListNode;

interface ILinkedList
{
    public function addFirst(mixed $value): int;
    public function addLast(mixed $value): int;
    public function set(int $position, mixed $value): void;
    
    public function get(int $position): ?LinkedListNode;
    public function getFirst(): ?LinkedListNode;
    public function getLast(): ?LinkedListNode;
    public function getLength(): int;
    
    public function remove(int $position): void;
    public function clear(): void;
}
