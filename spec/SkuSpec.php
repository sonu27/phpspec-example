<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SkuSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(1, 14.99);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Sku');
    }

    function it_should_output_price()
    {
        $this->getPrice()->shouldBe(14.99);
    }
}
