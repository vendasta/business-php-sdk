<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: business/v1/api.proto

namespace Business\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>business.v1.GetMultiRequest</code>
 */
class GetMultiRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated string business_ids = 1;</code>
     */
    private $business_ids;
    /**
     * <code>.business.v1.ProjectionFilter projection_filter = 2;</code>
     */
    private $projection_filter = null;

    public function __construct() {
        \GPBMetadata\Business\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated string business_ids = 1;</code>
     */
    public function getBusinessIds()
    {
        return $this->business_ids;
    }

    /**
     * <code>repeated string business_ids = 1;</code>
     */
    public function setBusinessIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->business_ids = $arr;
    }

    /**
     * <code>.business.v1.ProjectionFilter projection_filter = 2;</code>
     */
    public function getProjectionFilter()
    {
        return $this->projection_filter;
    }

    /**
     * <code>.business.v1.ProjectionFilter projection_filter = 2;</code>
     */
    public function setProjectionFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Business\V1\ProjectionFilter::class);
        $this->projection_filter = $var;
    }

}
