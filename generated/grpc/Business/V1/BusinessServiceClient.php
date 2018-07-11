<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Business\V1;

/**
 */
class BusinessServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create is used to create a new business.  Clients must specify the
     * partner ID and market ID that they want the business to be created
     * in.  Their IAM identity must have the appropriate policy setup for
     * this to be allowed.  Note that products can not be provisioned with
     * this RPC; a business must be created with this RPC first, and then
     * products can be provisioned on it.
     * @param \Business\V1\CreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Create(\Business\V1\CreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/business.v1.BusinessService/Create',
        $argument,
        ['\Business\V1\CreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetMulti is used to get Business(es) by their Business ID.  It
     * currently does not support Customer IDs. In a future release this
     * RPC will support lookup by either Busines ID or Customer ID. This
     * RPC also does not provide any search functionality.
     * @param \Business\V1\GetMultiRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetMulti(\Business\V1\GetMultiRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/business.v1.BusinessService/GetMulti',
        $argument,
        ['\Business\V1\GetMultiResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update is used to update specified fields of their business
     * @param \Business\V1\UpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Update(\Business\V1\UpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/business.v1.BusinessService/Update',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

}
