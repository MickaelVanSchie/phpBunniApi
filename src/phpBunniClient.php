<?php

namespace phpBunniApi\Api;

require_once("Resources/Invoices.php");

use phpBunni\Api\Exception\ApiException;
use phpBunniApi\Api\Resources\Invoices\InvoicesResource;

class phpBunniApi
{
    public $apiKey = null;
    public $businessId = null;
    public $apiUrl = null;

    public $apiVersion = "0.1";


    // Invoice Resource
    public $invoices;


    public function setApiKey($apiKey): phpBunniApi
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function setBusinessId($businessId): phpBunniApi
    {
        $this->businessId = $businessId;

        return $this;
    }

    public function buildApiUrl(string $endpoint): string
    {
        $this->apiUrl = "https://api.bunni.nl/" . $this->apiVersion . "/" . $this->businessId . "/";

        return "$this->apiUrl" . $endpoint;
    }

    protected function buildHeaders()
    {
        return stream_context_create(['http' => ['header' => array(
            "Accept: application/json", "Authorization: Bearer " . $this->apiKey, "Content-Type: application/json")]]);
    }

    public function createHttpRequest($endpoint, $data, $method = "GET")
    {
        $apiKey = $this->apiKey;
        $businessId = $this->businessId;
        if (!isset($apiKey)) {
            throw new ApiException("API key is required");
        }
        if (!isset($businessId)) {
            throw new ApiException("Business ID is required");
        }
        return file_get_contents($this->buildApiUrl($endpoint), false, $this->buildHeaders());
    }

    public function initializeResources()
    {
        $this->invoices = new InvoicesResource($this);
    }

    public function __construct()
    {
        $this->initializeResources();
    }
}
