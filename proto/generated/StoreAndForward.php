<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: storeforward.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * TODO: REPLACE
 *
 * Generated from protobuf message <code>StoreAndForward</code>
 */
class StoreAndForward extends \Google\Protobuf\Internal\Message
{
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.RequestResponse rr = 1;</code>
     */
    private $rr = 0;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.Statistics stats = 2;</code>
     */
    private $stats = null;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.History history = 3;</code>
     */
    private $history = null;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.Heartbeat heartbeat = 4;</code>
     */
    private $heartbeat = null;

    public function __construct() {
        \GPBMetadata\Storeforward::initOnce();
        parent::__construct();
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.RequestResponse rr = 1;</code>
     * @return int
     */
    public function getRr()
    {
        return $this->rr;
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.RequestResponse rr = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRr($var)
    {
        GPBUtil::checkEnum($var, \StoreAndForward_RequestResponse::class);
        $this->rr = $var;

        return $this;
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.Statistics stats = 2;</code>
     * @return \StoreAndForward_Statistics
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.Statistics stats = 2;</code>
     * @param \StoreAndForward_Statistics $var
     * @return $this
     */
    public function setStats($var)
    {
        GPBUtil::checkMessage($var, \StoreAndForward_Statistics::class);
        $this->stats = $var;

        return $this;
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.History history = 3;</code>
     * @return \StoreAndForward_History
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.History history = 3;</code>
     * @param \StoreAndForward_History $var
     * @return $this
     */
    public function setHistory($var)
    {
        GPBUtil::checkMessage($var, \StoreAndForward_History::class);
        $this->history = $var;

        return $this;
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.Heartbeat heartbeat = 4;</code>
     * @return \StoreAndForward_Heartbeat
     */
    public function getHeartbeat()
    {
        return $this->heartbeat;
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.StoreAndForward.Heartbeat heartbeat = 4;</code>
     * @param \StoreAndForward_Heartbeat $var
     * @return $this
     */
    public function setHeartbeat($var)
    {
        GPBUtil::checkMessage($var, \StoreAndForward_Heartbeat::class);
        $this->heartbeat = $var;

        return $this;
    }

}

