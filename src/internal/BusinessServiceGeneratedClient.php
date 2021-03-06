<?php 
# Code generated by sdkgen
# Generated on 2018-07-11 21:18:13.4335114 +0000 UTC using container gcr.io/repcore-prod/sdkgen:1.8.1rc1
# DO NOT EDIT!
namespace Vendasta\Business\V1\internal;

use Vendasta\Business\V1\Config;

class BusinessServiceGeneratedClient
{
    private $transport;
    
    /**
     * BusinessServiceGeneratedClient constructor.
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @param float $default_timeout
     */
    public function __construct(string $env, float $default_timeout = 10000)
    {
        $this->transport = $this->getTransportClient($env, $default_timeout);
    }

    /**
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @param float $default_timeout
     * @return BusinessServiceClientInterface
     */
    private function getTransportClient(string $env, float $default_timeout = 10000): BusinessServiceClientInterface
    {
        $config = $this->getEnvConfig($env);

        if (class_exists('Grpc\ChannelCredentials', true)) {
            return new BusinessServiceGRPCClient(
                $config['host'],
                $config['scope'],
                $config['secure'],
                $default_timeout
            );
        } else {
            return new BusinessServiceHTTPClient(
                $config['host'],
                $config['scope'],
                $config['secure'],
                $default_timeout
            );
        }
    }

    /**
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @return array
     */
    private function getEnvConfig(string $env): array {
        return Config::ENVIRONMENT_PARAMS[$env];
    }
    
    /**
     * @param \Business\V1\CreateRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Business\V1\CreateResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function Create(\Business\V1\CreateRequest $req, array $options = []): \Business\V1\CreateResponse
    {
        return $this->transport->Create($req, $options);
    }
    
    /**
     * @param \Business\V1\GetMultiRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Business\V1\GetMultiResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetMulti(\Business\V1\GetMultiRequest $req, array $options = []): \Business\V1\GetMultiResponse
    {
        return $this->transport->GetMulti($req, $options);
    }
    
    /**
     * @param \Business\V1\UpdateRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function Update(\Business\V1\UpdateRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->Update($req, $options);
    }
    
}
