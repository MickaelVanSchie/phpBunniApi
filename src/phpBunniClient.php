<?php

namespace phpBunniApi\Api;

class phpBunniApi
{
	public const $apiKey = null;
	public const $businessId = null;
	public const $apiUrl = null;


	public function setApiKey($apiKey)
	{
		$this->apiKey = $apiKey;

		return $this;
	};

	public function setBusinessId($businessId)
	{
		$this->businessId = $businessId;

		return $this;
	};

	public function buildApiUrl()
	{
		$this->apiUrl = "https://api.bunni.nl/" . $this->apiKey . '/' . $this->businessId;

		return $this->apiUrl;
	}
};
