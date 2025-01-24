<?php

use phpBunniApi\Api\phpBunniApi;

abstract class ResourceAbstract
{
    protected $client;

    public function __construct(phpBunniApi $client)
    {
        $this->client = $client;
    }
}