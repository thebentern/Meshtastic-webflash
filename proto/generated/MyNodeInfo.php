<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mesh.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Unique local debugging info for this node
 * Note: we don't include position or the user info, because that will come in the
 * Sent to the phone in response to WantNodes.
 *
 * Generated from protobuf message <code>MyNodeInfo</code>
 */
class MyNodeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *
     * Tells the phone what our node number is, default starting value is
     * lowbyte of macaddr, but it will be fixed if that is already in use
     *
     * Generated from protobuf field <code>uint32 my_node_num = 1;</code>
     */
    private $my_node_num = 0;
    /**
     *
     * Note: This flag merely means we detected a hardware GPS in our node.
     * Not the same as UserPreferences.location_sharing
     *
     * Generated from protobuf field <code>bool has_gps = 2;</code>
     */
    private $has_gps = false;
    /**
     *
     * The maximum number of 'software' channels that can be set on this node.
     *
     * Generated from protobuf field <code>uint32 max_channels = 3;</code>
     */
    private $max_channels = 0;
    /**
     *
     * 0.0.5 etc...
     *
     * Generated from protobuf field <code>string firmware_version = 4;</code>
     */
    private $firmware_version = '';
    /**
     *
     * An error message we'd like to report back to the mothership through analytics.
     * It indicates a serious bug occurred on the device, the device coped with it,
     * but we still want to tell the devs about the bug.
     * This field will be cleared after the phone reads MyNodeInfo
     * (i.e. it will only be reported once)
     * a numeric error code to go with error message, zero means no error
     *
     * Generated from protobuf field <code>.CriticalErrorCode error_code = 5;</code>
     */
    private $error_code = 0;
    /**
     *
     * A numeric error address (nonzero if available)
     *
     * Generated from protobuf field <code>uint32 error_address = 6;</code>
     */
    private $error_address = 0;
    /**
     *
     * The total number of errors this node has ever encountered
     * (well - since the last time we discarded preferences)
     *
     * Generated from protobuf field <code>uint32 error_count = 7;</code>
     */
    private $error_count = 0;
    /**
     *
     * The total number of reboots this node has ever encountered
     * (well - since the last time we discarded preferences)
     *
     * Generated from protobuf field <code>uint32 reboot_count = 8;</code>
     */
    private $reboot_count = 0;
    /**
     *
     * Calculated bitrate of the current channel (in Bytes Per Second)
     *
     * Generated from protobuf field <code>float bitrate = 9;</code>
     */
    private $bitrate = 0.0;
    /**
     *
     * How long before we consider a message abandoned and we can clear our
     * caches of any messages in flight Normally quite large to handle the worst case
     * message delivery time, 5 minutes.
     * Formerly called FLOOD_EXPIRE_TIME in the device code
     *
     * Generated from protobuf field <code>uint32 message_timeout_msec = 10;</code>
     */
    private $message_timeout_msec = 0;
    /**
     *
     * The minimum app version that can talk to this device.
     * Phone/PC apps should compare this to their build number and if too low tell the user they must update their app
     *
     * Generated from protobuf field <code>uint32 min_app_version = 11;</code>
     */
    private $min_app_version = 0;
    /**
     *
     * 24 time windows of 1hr each with the airtime transmitted out of the device per hour.
     *
     * Generated from protobuf field <code>repeated uint32 air_period_tx = 12;</code>
     */
    private $air_period_tx;
    /**
     *
     * 24 time windows of 1hr each with the airtime of valid packets for your mesh.
     *
     * Generated from protobuf field <code>repeated uint32 air_period_rx = 13;</code>
     */
    private $air_period_rx;
    /**
     *
     * Is the device wifi capable?
     *
     * Generated from protobuf field <code>bool has_wifi = 14;</code>
     */
    private $has_wifi = false;
    /**
     *
     * Utilization for the current channel, including well formed TX, RX and malformed RX (aka noise).
     *
     * Generated from protobuf field <code>float channel_utilization = 15;</code>
     */
    private $channel_utilization = 0.0;
    /**
     *
     * Percent of airtime for transmission used within the last hour.
     *
     * Generated from protobuf field <code>float air_util_tx = 16;</code>
     */
    private $air_util_tx = 0.0;

    public function __construct() {
        \GPBMetadata\Mesh::initOnce();
        parent::__construct();
    }

    /**
     *
     * Tells the phone what our node number is, default starting value is
     * lowbyte of macaddr, but it will be fixed if that is already in use
     *
     * Generated from protobuf field <code>uint32 my_node_num = 1;</code>
     * @return int
     */
    public function getMyNodeNum()
    {
        return $this->my_node_num;
    }

    /**
     *
     * Tells the phone what our node number is, default starting value is
     * lowbyte of macaddr, but it will be fixed if that is already in use
     *
     * Generated from protobuf field <code>uint32 my_node_num = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMyNodeNum($var)
    {
        GPBUtil::checkUint32($var);
        $this->my_node_num = $var;

        return $this;
    }

    /**
     *
     * Note: This flag merely means we detected a hardware GPS in our node.
     * Not the same as UserPreferences.location_sharing
     *
     * Generated from protobuf field <code>bool has_gps = 2;</code>
     * @return bool
     */
    public function getHasGps()
    {
        return $this->has_gps;
    }

    /**
     *
     * Note: This flag merely means we detected a hardware GPS in our node.
     * Not the same as UserPreferences.location_sharing
     *
     * Generated from protobuf field <code>bool has_gps = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasGps($var)
    {
        GPBUtil::checkBool($var);
        $this->has_gps = $var;

        return $this;
    }

    /**
     *
     * The maximum number of 'software' channels that can be set on this node.
     *
     * Generated from protobuf field <code>uint32 max_channels = 3;</code>
     * @return int
     */
    public function getMaxChannels()
    {
        return $this->max_channels;
    }

    /**
     *
     * The maximum number of 'software' channels that can be set on this node.
     *
     * Generated from protobuf field <code>uint32 max_channels = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_channels = $var;

        return $this;
    }

    /**
     *
     * 0.0.5 etc...
     *
     * Generated from protobuf field <code>string firmware_version = 4;</code>
     * @return string
     */
    public function getFirmwareVersion()
    {
        return $this->firmware_version;
    }

    /**
     *
     * 0.0.5 etc...
     *
     * Generated from protobuf field <code>string firmware_version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFirmwareVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->firmware_version = $var;

        return $this;
    }

    /**
     *
     * An error message we'd like to report back to the mothership through analytics.
     * It indicates a serious bug occurred on the device, the device coped with it,
     * but we still want to tell the devs about the bug.
     * This field will be cleared after the phone reads MyNodeInfo
     * (i.e. it will only be reported once)
     * a numeric error code to go with error message, zero means no error
     *
     * Generated from protobuf field <code>.CriticalErrorCode error_code = 5;</code>
     * @return int
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     *
     * An error message we'd like to report back to the mothership through analytics.
     * It indicates a serious bug occurred on the device, the device coped with it,
     * but we still want to tell the devs about the bug.
     * This field will be cleared after the phone reads MyNodeInfo
     * (i.e. it will only be reported once)
     * a numeric error code to go with error message, zero means no error
     *
     * Generated from protobuf field <code>.CriticalErrorCode error_code = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkEnum($var, \CriticalErrorCode::class);
        $this->error_code = $var;

        return $this;
    }

    /**
     *
     * A numeric error address (nonzero if available)
     *
     * Generated from protobuf field <code>uint32 error_address = 6;</code>
     * @return int
     */
    public function getErrorAddress()
    {
        return $this->error_address;
    }

    /**
     *
     * A numeric error address (nonzero if available)
     *
     * Generated from protobuf field <code>uint32 error_address = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setErrorAddress($var)
    {
        GPBUtil::checkUint32($var);
        $this->error_address = $var;

        return $this;
    }

    /**
     *
     * The total number of errors this node has ever encountered
     * (well - since the last time we discarded preferences)
     *
     * Generated from protobuf field <code>uint32 error_count = 7;</code>
     * @return int
     */
    public function getErrorCount()
    {
        return $this->error_count;
    }

    /**
     *
     * The total number of errors this node has ever encountered
     * (well - since the last time we discarded preferences)
     *
     * Generated from protobuf field <code>uint32 error_count = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setErrorCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->error_count = $var;

        return $this;
    }

    /**
     *
     * The total number of reboots this node has ever encountered
     * (well - since the last time we discarded preferences)
     *
     * Generated from protobuf field <code>uint32 reboot_count = 8;</code>
     * @return int
     */
    public function getRebootCount()
    {
        return $this->reboot_count;
    }

    /**
     *
     * The total number of reboots this node has ever encountered
     * (well - since the last time we discarded preferences)
     *
     * Generated from protobuf field <code>uint32 reboot_count = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setRebootCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->reboot_count = $var;

        return $this;
    }

    /**
     *
     * Calculated bitrate of the current channel (in Bytes Per Second)
     *
     * Generated from protobuf field <code>float bitrate = 9;</code>
     * @return float
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     *
     * Calculated bitrate of the current channel (in Bytes Per Second)
     *
     * Generated from protobuf field <code>float bitrate = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setBitrate($var)
    {
        GPBUtil::checkFloat($var);
        $this->bitrate = $var;

        return $this;
    }

    /**
     *
     * How long before we consider a message abandoned and we can clear our
     * caches of any messages in flight Normally quite large to handle the worst case
     * message delivery time, 5 minutes.
     * Formerly called FLOOD_EXPIRE_TIME in the device code
     *
     * Generated from protobuf field <code>uint32 message_timeout_msec = 10;</code>
     * @return int
     */
    public function getMessageTimeoutMsec()
    {
        return $this->message_timeout_msec;
    }

    /**
     *
     * How long before we consider a message abandoned and we can clear our
     * caches of any messages in flight Normally quite large to handle the worst case
     * message delivery time, 5 minutes.
     * Formerly called FLOOD_EXPIRE_TIME in the device code
     *
     * Generated from protobuf field <code>uint32 message_timeout_msec = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageTimeoutMsec($var)
    {
        GPBUtil::checkUint32($var);
        $this->message_timeout_msec = $var;

        return $this;
    }

    /**
     *
     * The minimum app version that can talk to this device.
     * Phone/PC apps should compare this to their build number and if too low tell the user they must update their app
     *
     * Generated from protobuf field <code>uint32 min_app_version = 11;</code>
     * @return int
     */
    public function getMinAppVersion()
    {
        return $this->min_app_version;
    }

    /**
     *
     * The minimum app version that can talk to this device.
     * Phone/PC apps should compare this to their build number and if too low tell the user they must update their app
     *
     * Generated from protobuf field <code>uint32 min_app_version = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMinAppVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_app_version = $var;

        return $this;
    }

    /**
     *
     * 24 time windows of 1hr each with the airtime transmitted out of the device per hour.
     *
     * Generated from protobuf field <code>repeated uint32 air_period_tx = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAirPeriodTx()
    {
        return $this->air_period_tx;
    }

    /**
     *
     * 24 time windows of 1hr each with the airtime transmitted out of the device per hour.
     *
     * Generated from protobuf field <code>repeated uint32 air_period_tx = 12;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAirPeriodTx($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->air_period_tx = $arr;

        return $this;
    }

    /**
     *
     * 24 time windows of 1hr each with the airtime of valid packets for your mesh.
     *
     * Generated from protobuf field <code>repeated uint32 air_period_rx = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAirPeriodRx()
    {
        return $this->air_period_rx;
    }

    /**
     *
     * 24 time windows of 1hr each with the airtime of valid packets for your mesh.
     *
     * Generated from protobuf field <code>repeated uint32 air_period_rx = 13;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAirPeriodRx($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->air_period_rx = $arr;

        return $this;
    }

    /**
     *
     * Is the device wifi capable?
     *
     * Generated from protobuf field <code>bool has_wifi = 14;</code>
     * @return bool
     */
    public function getHasWifi()
    {
        return $this->has_wifi;
    }

    /**
     *
     * Is the device wifi capable?
     *
     * Generated from protobuf field <code>bool has_wifi = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasWifi($var)
    {
        GPBUtil::checkBool($var);
        $this->has_wifi = $var;

        return $this;
    }

    /**
     *
     * Utilization for the current channel, including well formed TX, RX and malformed RX (aka noise).
     *
     * Generated from protobuf field <code>float channel_utilization = 15;</code>
     * @return float
     */
    public function getChannelUtilization()
    {
        return $this->channel_utilization;
    }

    /**
     *
     * Utilization for the current channel, including well formed TX, RX and malformed RX (aka noise).
     *
     * Generated from protobuf field <code>float channel_utilization = 15;</code>
     * @param float $var
     * @return $this
     */
    public function setChannelUtilization($var)
    {
        GPBUtil::checkFloat($var);
        $this->channel_utilization = $var;

        return $this;
    }

    /**
     *
     * Percent of airtime for transmission used within the last hour.
     *
     * Generated from protobuf field <code>float air_util_tx = 16;</code>
     * @return float
     */
    public function getAirUtilTx()
    {
        return $this->air_util_tx;
    }

    /**
     *
     * Percent of airtime for transmission used within the last hour.
     *
     * Generated from protobuf field <code>float air_util_tx = 16;</code>
     * @param float $var
     * @return $this
     */
    public function setAirUtilTx($var)
    {
        GPBUtil::checkFloat($var);
        $this->air_util_tx = $var;

        return $this;
    }

}

