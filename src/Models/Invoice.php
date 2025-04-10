<?php

class Invoice
{
    public $invoiceDate;
    public $invoiceNumber;
    /** @var Row[] $rows */
    private $rowsArray;
    public $isFinalized;
    public $duePeriodDays;
    public $pdfUrl;
    public $id;
    public $taxMode;
    public $design;
    public $externalId;
    public $contact;


    public function __construct(
        string $invoiceDate,
        int $invoiceNumber,
        array $rows,
        bool $isFinalized,
        int $duePeriodDays,
        int $id,
        string $taxMode,
        InvoiceDesign $design,
        string $externalId,
        Contact $contact,
        string $pdfUrl
    )
    {
        $this->invoiceDate = $invoiceDate;
        $this->invoiceNumber = $invoiceNumber;
        $this->setRows(...$rows);
        $this->isFinalized = $isFinalized;
        $this->duePeriodDays = $duePeriodDays;
        $this->id = $id;
        $this->taxMode = $taxMode;
        $this->design = $design;
        $this->externalId = $externalId;
        $this->contact = $contact;
        $this->pdfUrl = $pdfUrl;
    }

    public function setRows (Row ...$rows) {
        $this->rowsArray = $rows;
    }

    public function rows() {
        return $this->rowsArray;
    }
}