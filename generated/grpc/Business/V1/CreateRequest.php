<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: business/v1/api.proto

namespace Business\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>business.v1.CreateRequest</code>
 */
class CreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.business.v1.Business business = 1;</code>
     */
    private $business = null;

    public function __construct() {
        \GPBMetadata\Business\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>.business.v1.Business business = 1;</code>
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * <code>.business.v1.Business business = 1;</code>
     */
    public function setBusiness(&$var)
    {
        GPBUtil::checkMessage($var, \Business\V1\Business::class);
        $this->business = $var;
    }

}

