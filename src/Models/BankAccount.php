<?php
class BankAccount {
    public $id;
    public $type;
    public $name;
    public $accountNumber;

    public function __construct(int $id, Type $type, string $name, string $accountNumber)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->accountNumber = $accountNumber;
    }
}

class Type {
    public $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
}