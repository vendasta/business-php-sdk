<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: business/v1/api.proto

namespace Business\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Stores information about a particular timespan that the business
 * is open
 * </pre>
 *
 * Protobuf type <code>business.v1.HoursOfOperation.Span</code>
 */
class HoursOfOperation_Span extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The days of the week (a list of days as text) this span applies to
     * </pre>
     *
     * <code>repeated .business.v1.HoursOfOperation.DayOfWeek day_of_week = 1;</code>
     */
    private $day_of_week;
    /**
     * <pre>
     * A description of when the business opens in military time:
     * "16:40" is 4:30 PM?
     * </pre>
     *
     * <code>string opens = 2;</code>
     */
    private $opens = '';
    /**
     * <pre>
     * A descriptoin of when the business closes in military time:
     * "13:00" is 1:00 PM?
     * </pre>
     *
     * <code>string closes = 3;</code>
     */
    private $closes = '';
    /**
     * <pre>
     * A description accompanying the span.  Use this field for 
     * describing holiday hours?
     * </pre>
     *
     * <code>string description = 4;</code>
     */
    private $description = '';

    public function __construct() {
        \GPBMetadata\Business\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The days of the week (a list of days as text) this span applies to
     * </pre>
     *
     * <code>repeated .business.v1.HoursOfOperation.DayOfWeek day_of_week = 1;</code>
     */
    public function getDayOfWeek()
    {
        return $this->day_of_week;
    }

    /**
     * <pre>
     * The days of the week (a list of days as text) this span applies to
     * </pre>
     *
     * <code>repeated .business.v1.HoursOfOperation.DayOfWeek day_of_week = 1;</code>
     */
    public function setDayOfWeek(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Business\V1\HoursOfOperation_DayOfWeek::class);
        $this->day_of_week = $arr;
    }

    /**
     * <pre>
     * A description of when the business opens in military time:
     * "16:40" is 4:30 PM?
     * </pre>
     *
     * <code>string opens = 2;</code>
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * <pre>
     * A description of when the business opens in military time:
     * "16:40" is 4:30 PM?
     * </pre>
     *
     * <code>string opens = 2;</code>
     */
    public function setOpens($var)
    {
        GPBUtil::checkString($var, True);
        $this->opens = $var;
    }

    /**
     * <pre>
     * A descriptoin of when the business closes in military time:
     * "13:00" is 1:00 PM?
     * </pre>
     *
     * <code>string closes = 3;</code>
     */
    public function getCloses()
    {
        return $this->closes;
    }

    /**
     * <pre>
     * A descriptoin of when the business closes in military time:
     * "13:00" is 1:00 PM?
     * </pre>
     *
     * <code>string closes = 3;</code>
     */
    public function setCloses($var)
    {
        GPBUtil::checkString($var, True);
        $this->closes = $var;
    }

    /**
     * <pre>
     * A description accompanying the span.  Use this field for 
     * describing holiday hours?
     * </pre>
     *
     * <code>string description = 4;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * A description accompanying the span.  Use this field for 
     * describing holiday hours?
     * </pre>
     *
     * <code>string description = 4;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

}

