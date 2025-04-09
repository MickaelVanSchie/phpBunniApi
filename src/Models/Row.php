<?php

class Row {
    public $description;
    public $tax;
    public $unitPrice;
    public $bookingCategory;

    public function __construct(string $description, string $tax, float $unitPrice, int $bookingCategory) {
        $this->description = $description;
        $this->tax = $tax;
        $this->unitPrice = $unitPrice;
        $this->bookingCategory = $bookingCategory;
    }
}