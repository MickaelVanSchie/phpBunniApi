<?php

namespace phpBunniApi\Api;


use phpBunni\Api\Exception\ApiException;

class phpBunniApi
{
    public $apiKey = null;
    public $businessId = null;
    public $apiUrl = null;

    public $apiVersion = "0.1";


    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function setBusinessId($businessId)
    {
        $this->businessId = $businessId;

        return $this;
    }

    public function buildApiUrl()
    {
        $this->apiUrl = "https://api.bunni.nl/" . $this->apiVersion . "/" . $this->businessId . "/";

        return $this->apiUrl;
    }

    protected function buildHeaders() {
        return stream_context_create(['http' => ['header' => array(
            "Accept: application/json", "Authorization: Bearer " . $this->apiKey, "Content-Type: application/json")]]);
    }

    public function createHttpRequest($endpoint, $data, $method = "GET")
    {
        $apiKey = $this->apiKey;
        $businessId = $this->businessId;
        if (!isset($apiKey)) {
            // todo: throw exception.
            echo("apkikey not set");
        }
        if (!$businessId) {
            // todo: throw exception.
            echo("businessId not set");
        }
        return file_get_contents($this->buildApiUrl() . $endpoint, false, $this->buildHeaders());
    }
}