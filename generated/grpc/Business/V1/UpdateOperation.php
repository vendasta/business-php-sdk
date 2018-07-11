<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: business/v1/api.proto

namespace Business\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Update operation allows updating a specific piece of the business
 * </pre>
 *
 * Protobuf type <code>business.v1.UpdateOperation</code>
 */
class UpdateOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.business.v1.FieldMask field_mask = 20;</code>
     */
    private $field_mask = null;
    protected $operation;

    public function __construct() {
        \GPBMetadata\Business\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Specifying this operation will update the business' basic data
     * </pre>
     *
     * <code>.business.v1.BasicData basic_data = 1;</code>
     */
    public function getBasicData()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * Specifying this operation will update the business' basic data
     * </pre>
     *
     * <code>.business.v1.BasicData basic_data = 1;</code>
     */
    public function setBasicData(&$var)
    {
        GPBUtil::checkMessage($var, \Business\V1\BasicData::class);
        $this->writeOneof(1, $var);
    }

    /**
     * <pre>
     * Specifying this operation will update the business' social urls
     * </pre>
     *
     * <code>.business.v1.SocialURLs social_urls = 2;</code>
     */
    public function getSocialUrls()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * Specifying this operation will update the business' social urls
     * </pre>
     *
     * <code>.business.v1.SocialURLs social_urls = 2;</code>
     */
    public function setSocialUrls(&$var)
    {
        GPBUtil::checkMessage($var, \Business\V1\SocialURLs::class);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * Specifying this operation will update the business' hours of operation
     * </pre>
     *
     * <code>.business.v1.HoursOfOperation hours_of_operation = 3;</code>
     */
    public function getHoursOfOperation()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * Specifying this operation will update the business' hours of operation
     * </pre>
     *
     * <code>.business.v1.HoursOfOperation hours_of_operation = 3;</code>
     */
    public function setHoursOfOperation(&$var)
    {
        GPBUtil::checkMessage($var, \Business\V1\HoursOfOperation::class);
        $this->writeOneof(3, $var);
    }

    /**
     * <pre>
     * Specifying this operation will update the business' administration details
     * </pre>
     *
     * <code>.business.v1.Administration administration = 4;</code>
     */
    public function getAdministration()
    {
        return $this->readOneof(4);
    }

    /**
     * <pre>
     * Specifying this operation will update the business' administration details
     * </pre>
     *
     * <code>.business.v1.Administration administration = 4;</code>
     */
    public function setAdministration(&$var)
    {
        GPBUtil::checkMessage($var, \Business\V1\Administration::class);
        $this->writeOneof(4, $var);
    }

    /**
     * <code>.business.v1.FieldMask field_mask = 20;</code>
     */
    public function getFieldMask()
    {
        return $this->field_mask;
    }

    /**
     * <code>.business.v1.FieldMask field_mask = 20;</code>
     */
    public function setFieldMask(&$var)
    {
        GPBUtil::checkMessage($var, \Business\V1\FieldMask::class);
        $this->field_mask = $var;
    }

    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

