<?php


namespace phpBunniApi\Api\Resources\BankAccounts;
require_once('ResourceAbstract.php');

use phpBunni\Api\Exception\NotImplementedException;
use phpBunniApi\Api;
use ResourceAbstract;

class BankAccountResource extends ResourceAbstract
{
    public function List()
    {
        echo($this->client->apiKey);
    }
}