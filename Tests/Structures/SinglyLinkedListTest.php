<?php

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Structures\SinglyLinkedList;

class SinglyLinkedListTest extends TestCase
{
    protected SinglyLinkedList $list;

    protected function setUp(): void
    {
        $this->list = new SinglyLinkedList();
    }

    protected function fillList()
    {
        $this->list->addLast('1');
        $this->list->addLast('2');
        $this->list->addLast('3');
    }

    /** @test */
    public function add_element_to_the_start()
    {
        $this->list->addFirst('1');
        $this->list->addFirst('2');
        $length = $this->list->addFirst('3');

        $this->assertEquals(3, $length);
        $this->assertEquals('3', $this->list->getFirst()->value);
    }

    /** @test */
    public function add_element_to_the_end()
    {
        $this->fillList();

        $this->assertEquals(3, $this->list->getLength());
        $this->assertEquals('3', $this->list->getLast()->value);
    }

    /** @test */
    public function set_element_with_correct_value()
    {
        $this->fillList();

        $this->list->set(1, '416');
        $this->list->set(0, 'Hello');

        $this->assertEquals('416', $this->list->get(1)->value);
        $this->assertEquals('Hello', $this->list->get(0)->value);
    }

    /** @test */
    public function set_element_with_incorrect_value()
    {
        $this->fillList();

        $this->expectException(OutOfRangeException::class);
        $this->list->set(66, '666');

        $this->expectException(OutOfRangeException::class);
        $this->list->set(-1, '5');
    }
}
