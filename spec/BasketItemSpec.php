<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BasketItemSpec extends ObjectBehavior
{
	function let()
    {
        $this->beConstructedWith(new \Sku('5.50'));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BasketItem');
    }

    function its_quantity_can_be_incremented()
    {
    	$this->incrementQuantity();
    	$this->getQuantity()->shouldBe(2);
    }

    function its_quantity_can_be_deincremented(\Sku $sku)
    {
        $this->beConstructedWith($sku, 5);
        $this->deincrementQuantity();
        $this->getQuantity()->shouldBe(4);
    }

    function its_quantity_should_not_go_below_one()
    {
        $this->deincrementQuantity();
        $this->getQuantity()->shouldBe(1);
    }

    function it_should_return_a_sku()
    {
        $this->getSku()->shouldHaveType('Sku');
    }

    function it_should_output_a_total()
    {
        $this->getTotal()->shouldBe(5.50);
    }
}
