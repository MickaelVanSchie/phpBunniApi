<?php

namespace phpBunniApi\Api\Resources\Invoices;

use phpBunniApi\Api;
use ResourceAbstract;

class InvoicesResource extends ResourceAbstract
{
    public function test() {
        echo($this->client->apiKey);
    }

    public function InvoiceListEndpoint() {
        echo($this->client->apiKey);
    }
}