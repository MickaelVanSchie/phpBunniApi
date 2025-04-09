<?php

class Contact
{
    public $attn;
    public $street;
    public $streetNumber;
    public $postalCode;
    public $city;
    public $companyName;
    public $phoneNumber;
    public $vatIdentificationNumber;
    public $chamberOfCommerceNumber;
    public $emailAddresses;
    public $color;
    public $fields;
    public $id;

    public function __construct(
        string $attn,
        string $street,
        string $streetNumber,
        string $postalCode,
        string $city,
        string $companyName,
        string $phoneNumber,
        string $vatIdentificationNumber,
        string $chamberOfCommerceNumber,
        array $emailAddresses,
        string $color,
        array $fields,
        string $id
    )
    {
        $this->attn = $attn;
        $this->street = $street;
        $this->streetNumber = $streetNumber;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->companyName = $companyName;
        $this->phoneNumber = $phoneNumber;
        $this->vatIdentificationNumber = $vatIdentificationNumber;
        $this->chamberOfCommerceNumber = $chamberOfCommerceNumber;
        $this->emailAddresses = $emailAddresses;
        $this->color = $color;
        $this->fields = $fields;
        $this->id = $id;
    }
}