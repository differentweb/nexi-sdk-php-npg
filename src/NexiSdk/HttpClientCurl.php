<?php

namespace NexiSdk;

use NexiSdk\configuration\IConfiguration;

class HttpClientCurl
{

    public function executeHttpPost(
            IConfiguration $configuration,
            string $relativeApi,
            $requestBody
    )
    {
        $apiUrl = $configuration->getGatewayBaseUrl() . $relativeApi;
        $headers = array(
            'Content-Type: application/json',
            'X-Api-Key: ' . $configuration->getApiKey()
        );
        $ch = curl_init($apiUrl);
        $payload = json_encode($requestBody);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function executeHttpGet(
            IConfiguration $configuration,
            string $relativeApi,
            array $queryParams
    )
    {
        $queryData = "";
        if (count($queryParams) > 0) {
            $queryData += "?" + \http_build_query($queryParams);
        }
        $apiUrl = $configuration->getGatewayBaseUrl() . $relativeApi . $queryData;
        $headers = array(
            'X-Api-Key: ' . $configuration->getApiKey()
        );
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

}
