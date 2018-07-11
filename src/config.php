<?php
namespace Vendasta\Business\V1;

class Config
{
    const ENVIRONMENT_PARAMS = [
        "PROD" => [
            'host' => 'business-api-prod.vendasta-internal.com:443',
            'scope' => 'https://business-api-prod.vendasta-internal.com',
            'url' => 'https://business-api-prod.vendasta-internal.com',
            'secure' => true,
        ],
        "TEST" => [
            'host' => 'business-test.vendasta-internal.com:443',
            'scope' => 'https://business-test.vendasta-internal.com',
            'url' => 'https://business-test.vendasta-internal.com',
            'secure' => true,
        ],
        "DEMO" => [
            'host' => 'business-demo.vendasta-internal.com:443',
            'scope' => 'https://business-demo.vendasta-internal.com',
            'url' => 'https://business-demo.vendasta-internal.com',
            'secure' => true,
        ],
        "LOCAL" => [
            'host' => 'http://business-service-api.vendasta-local.com',
            'scope' => 'http://business-service-api.vendasta-local.com',
            'url' => 'http://business-service-api.vendasta-local.com',
            'secure' => false,
        ]
    ];
}
