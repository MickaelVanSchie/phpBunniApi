<?php

class Category
{
    public $id;
    public $name;
    public $color;
    public $ledgerNumber;

    public function __construct(int $id, string $name, string $color, string $ledgerNumber)
    {
        $this->id = $id;
        $this->name = $name;
        $this->color = $color;
        $this->ledgerNumber = $ledgerNumber;
    }
}