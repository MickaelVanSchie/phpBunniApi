<?php

class Invoice
{
    public $invoiceDate;
    public $invoiceNumber;
    public $rows;
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
        Contact $contact
    )
    {
        $this->invoiceDate = $invoiceDate;
        $this->invoiceNumber = $invoiceNumber;
        $this->rows = $rows;
        $this->isFinalized = $isFinalized;
        $this->duePeriodDays = $duePeriodDays;
        $this->id = $id;
        $this->taxMode = $taxMode;
        $this->design = $design;
        $this->externalId = $externalId;
        $this->contact = $contact;
    }
}