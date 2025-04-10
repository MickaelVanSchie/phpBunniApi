<?php


namespace phpBunniApi\Api\Resources\Invoices;
require_once('ResourceAbstract.php');

use phpBunni\Api\Exception\NotImplementedException;
use phpBunniApi\Api;
use ResourceAbstract;

class InvoicesResource extends ResourceAbstract
{
    public function List()
    {
        echo($this->client->apiKey);
    }

    public function CreatePdf() {
        throw new NotImplementedException("This function has not been implemented.");
    }

    public function CreateOrUpdate() {
        throw new NotImplementedException("This function has not been implemented.");
    }
}