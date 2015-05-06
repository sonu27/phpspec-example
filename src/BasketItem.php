<?php

class BasketItem
{
	private $sku;
	private $quantity;

	public function __construct(Sku $sku, $quantity = 1)
	{
		$this->sku = $sku;
		$this->quantity = $quantity;
	}

	public function getQuantity() {
		return $this->quantity;
	}

    public function incrementQuantity()
    {
		$this->quantity++;
    }

	public function deincrementQuantity() {
		if ($this->quantity > 1) {
			$this->quantity--;
		}
	}

    public function getSku()
    {
        return $this->sku;
    }

    public function getTotal()
    {
    	return $this->quantity * $this->sku->getPrice();
    }
}
