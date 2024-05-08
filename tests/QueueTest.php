<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue = new Queue();
        $this->assertEquals(0, $queue->getCount());
        return $queue;
    }

    /**
     * @depends testNewQueueIsEmpty
     */
    public function testAnItemIsAddedToTheQueue(Queue $queue)
    {
        $queue->push('green');
        $this->assertEquals(1, $queue->getCount());
        return $queue;
    }

    /**
     * @depends testAnItemIsAddedToTheQueue
     */
    public function testAnItemIsRemovedFromTheQueue(Queue $queue)
    {
        $item = $queue->pop();
        $this->assertEquals(0, $queue->getCount());
        $this->assertEquals('green', $item);
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        $queue = new Queue();
        $queue->push('first');
        $queue->push('second');
        $this->assertEquals('first', $queue->pop());
    }

    public function testMaxNumberOfItemsCanBeAdded()
    {
        $queue = new Queue();
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
            $queue->push($i);
        }
        $this->assertEquals(Queue::MAX_ITEMS, $queue->getCount());
    }
}
