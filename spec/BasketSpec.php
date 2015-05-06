<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BasketSpec extends ObjectBehavior
{
    function let()
    {
        $items = [
            new \BasketItem(new \Sku(9.99)),
            new \BasketItem(new \Sku(12.99)),
        ];

        $this->beConstructedWith($items);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Basket');
    }

    function it_should_output_total()
    {

        $this->calculateTotal()->shouldBe(22.98);
    }
}
