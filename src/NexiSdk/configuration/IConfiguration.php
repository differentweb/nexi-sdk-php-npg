<?php

namespace NexiSdk\configuration;

interface IConfiguration
{

    function getGatewayBaseUrl(): string;

    function getApiKey(): string;
}
