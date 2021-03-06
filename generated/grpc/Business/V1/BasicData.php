<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: business/v1/api.proto

namespace Business\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A set of basic information about a business that is common to almost all 
 * types of business.  Most of this information is required to construct a
 * good online business listing.
 * </pre>
 *
 * Protobuf type <code>business.v1.BasicData</code>
 */
class BasicData extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The operating name of the business
     * </pre>
     *
     * <code>string company_name = 1;</code>
     */
    private $company_name = '';
    /**
     * <pre>
     * The street address of the location
     * </pre>
     *
     * <code>string address = 2;</code>
     */
    private $address = '';
    /**
     * <pre>
     * The city of the location
     * </pre>
     *
     * <code>string city = 3;</code>
     */
    private $city = '';
    /**
     * <pre>
     * The state/province/territory of the location
     * </pre>
     *
     * <code>string state = 4;</code>
     */
    private $state = '';
    /**
     * <pre>
     * The zip/postalcode of the location
     * </pre>
     *
     * <code>string zip = 5;</code>
     */
    private $zip = '';
    /**
     * <pre>
     * The country of the location
     * </pre>
     *
     * <code>string country = 6;</code>
     */
    private $country = '';
    /**
     * <pre>
     * The website of the location or business
     * </pre>
     *
     * <code>string website = 7;</code>
     */
    private $website = '';
    /**
     * <pre>
     * A list of local phone numbers used by the business.  These can
     * not be toll-free numbers
     * </pre>
     *
     * <code>repeated string work_number = 8;</code>
     */
    private $work_number;
    /**
     * <pre>
     * A list of call-tracking nubmers used by the business.  These are
     * generally used for advertising attribution.
     * </pre>
     *
     * <code>repeated string call_tracking_number = 9;</code>
     */
    private $call_tracking_number;
    /**
     * <pre>
     * The geo point describing the location
     * </pre>
     *
     * <code>.business.v1.Geo location = 10;</code>
     */
    private $location = null;
    /**
     * <pre>
     * The timezone of the location in text form (ie. "MT" or "ET")
     * </pre>
     *
     * <code>string timezone = 11;</code>
     */
    private $timezone = '';

    public function __construct() {
        \GPBMetadata\Business\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The operating name of the business
     * </pre>
     *
     * <code>string company_name = 1;</code>
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * <pre>
     * The operating name of the business
     * </pre>
     *
     * <code>string company_name = 1;</code>
     */
    public function setCompanyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->company_name = $var;
    }

    /**
     * <pre>
     * The street address of the location
     * </pre>
     *
     * <code>string address = 2;</code>
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * <pre>
     * The street address of the location
     * </pre>
     *
     * <code>string address = 2;</code>
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;
    }

    /**
     * <pre>
     * The city of the location
     * </pre>
     *
     * <code>string city = 3;</code>
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * <pre>
     * The city of the location
     * </pre>
     *
     * <code>string city = 3;</code>
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;
    }

    /**
     * <pre>
     * The state/province/territory of the location
     * </pre>
     *
     * <code>string state = 4;</code>
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <pre>
     * The state/province/territory of the location
     * </pre>
     *
     * <code>string state = 4;</code>
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;
    }

    /**
     * <pre>
     * The zip/postalcode of the location
     * </pre>
     *
     * <code>string zip = 5;</code>
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * <pre>
     * The zip/postalcode of the location
     * </pre>
     *
     * <code>string zip = 5;</code>
     */
    public function setZip($var)
    {
        GPBUtil::checkString($var, True);
        $this->zip = $var;
    }

    /**
     * <pre>
     * The country of the location
     * </pre>
     *
     * <code>string country = 6;</code>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <pre>
     * The country of the location
     * </pre>
     *
     * <code>string country = 6;</code>
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;
    }

    /**
     * <pre>
     * The website of the location or business
     * </pre>
     *
     * <code>string website = 7;</code>
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * <pre>
     * The website of the location or business
     * </pre>
     *
     * <code>string website = 7;</code>
     */
    public function setWebsite($var)
    {
        GPBUtil::checkString($var, True);
        $this->website = $var;
    }

    /**
     * <pre>
     * A list of local phone numbers used by the business.  These can
     * not be toll-free numbers
     * </pre>
     *
     * <code>repeated string work_number = 8;</code>
     */
    public function getWorkNumber()
    {
        return $this->work_number;
    }

    /**
     * <pre>
     * A list of local phone numbers used by the business.  These can
     * not be toll-free numbers
     * </pre>
     *
     * <code>repeated string work_number = 8;</code>
     */
    public function setWorkNumber(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->work_number = $arr;
    }

    /**
     * <pre>
     * A list of call-tracking nubmers used by the business.  These are
     * generally used for advertising attribution.
     * </pre>
     *
     * <code>repeated string call_tracking_number = 9;</code>
     */
    public function getCallTrackingNumber()
    {
        return $this->call_tracking_number;
    }

    /**
     * <pre>
     * A list of call-tracking nubmers used by the business.  These are
     * generally used for advertising attribution.
     * </pre>
     *
     * <code>repeated string call_tracking_number = 9;</code>
     */
    public function setCallTrackingNumber(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->call_tracking_number = $arr;
    }

    /**
     * <pre>
     * The geo point describing the location
     * </pre>
     *
     * <code>.business.v1.Geo location = 10;</code>
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * <pre>
     * The geo point describing the location
     * </pre>
     *
     * <code>.business.v1.Geo location = 10;</code>
     */
    public function setLocation(&$var)
    {
        GPBUtil::checkMessage($var, \Business\V1\Geo::class);
        $this->location = $var;
    }

    /**
     * <pre>
     * The timezone of the location in text form (ie. "MT" or "ET")
     * </pre>
     *
     * <code>string timezone = 11;</code>
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * <pre>
     * The timezone of the location in text form (ie. "MT" or "ET")
     * </pre>
     *
     * <code>string timezone = 11;</code>
     */
    public function setTimezone($var)
    {
        GPBUtil::checkString($var, True);
        $this->timezone = $var;
    }

}

