<?php

namespace Structures\Interfaces\LinkedList;

interface ILinkedList
{
    public function addFirst(mixed $value): int;
    public function addLast(mixed $value): int;
    public function set(int $position, mixed $value): void;
    public function getLength(): int;
    public function remove(int $position): void;
    public function clear(): void;
}
