<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: business/v1/api.proto

namespace Business\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>business.v1.GetMultiResponse</code>
 */
class GetMultiResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .business.v1.GetMultiResponse.BusinessContainer businesss = 1;</code>
     */
    private $businesss;

    public function __construct() {
        \GPBMetadata\Business\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .business.v1.GetMultiResponse.BusinessContainer businesss = 1;</code>
     */
    public function getBusinesss()
    {
        return $this->businesss;
    }

    /**
     * <code>repeated .business.v1.GetMultiResponse.BusinessContainer businesss = 1;</code>
     */
    public function setBusinesss(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Business\V1\GetMultiResponse_BusinessContainer::class);
        $this->businesss = $arr;
    }

}
