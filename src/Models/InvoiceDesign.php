<?php

class InvoiceDesign {
    public $id;
    public $createdOn;
    public $name;

    public function __construct(int $id, string $createdOn, string $name) {
        $this->id = $id;
        $this->createdOn = $createdOn;
        $this->name = $name;
    }
}