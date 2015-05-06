<?php

class Basket
{
    private $items;

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function addItem(\BasketItem $item)
    {
        $this->items[] = $item;
    }

    public function calculateTotal()
    {
        $total = 0.0;

        foreach ($this->items as $item) {
            $total += $item->getTotal();
        }

        return $total;
    }
}
