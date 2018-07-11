<?php 
namespace Vendasta\Business\V1;

use Vendasta\Business\V1\internal\BusinessServiceGeneratedClient;

class BusinessServiceClient extends BusinessServiceGeneratedClient
{
    /**
     * BusinessServiceClient constructor.
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @param float $default_timeout
     */
    public function __construct(string $env, float $default_timeout = 10000)
    {
        parent::__construct($env, $default_timeout);
    }
}
