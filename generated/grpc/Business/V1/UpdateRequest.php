<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: business/v1/api.proto

namespace Business\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>business.v1.UpdateRequest</code>
 */
class UpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string business_id = 1;</code>
     */
    private $business_id = '';
    /**
     * <code>repeated .business.v1.UpdateOperation update_operations = 2;</code>
     */
    private $update_operations;

    public function __construct() {
        \GPBMetadata\Business\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>string business_id = 1;</code>
     */
    public function getBusinessId()
    {
        return $this->business_id;
    }

    /**
     * <code>string business_id = 1;</code>
     */
    public function setBusinessId($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_id = $var;
    }

    /**
     * <code>repeated .business.v1.UpdateOperation update_operations = 2;</code>
     */
    public function getUpdateOperations()
    {
        return $this->update_operations;
    }

    /**
     * <code>repeated .business.v1.UpdateOperation update_operations = 2;</code>
     */
    public function setUpdateOperations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Business\V1\UpdateOperation::class);
        $this->update_operations = $arr;
    }

}
