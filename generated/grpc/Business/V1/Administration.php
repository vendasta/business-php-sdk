<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: business/v1/api.proto

namespace Business\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A set of information about the administration of this business. This information is only
 * available to admins, and not to the local business owner
 * </pre>
 *
 * Protobuf type <code>business.v1.Administration</code>
 */
class Administration extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Notes about this business
     * </pre>
     *
     * <code>string notes = 1;</code>
     */
    private $notes = '';

    public function __construct() {
        \GPBMetadata\Business\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Notes about this business
     * </pre>
     *
     * <code>string notes = 1;</code>
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * <pre>
     * Notes about this business
     * </pre>
     *
     * <code>string notes = 1;</code>
     */
    public function setNotes($var)
    {
        GPBUtil::checkString($var, True);
        $this->notes = $var;
    }

}

