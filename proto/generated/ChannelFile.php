<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: deviceonly.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * The on-disk saved channels
 *
 * Generated from protobuf message <code>ChannelFile</code>
 */
class ChannelFile extends \Google\Protobuf\Internal\Message
{
    /**
     *
     * The channels our node knows about
     *
     * Generated from protobuf field <code>repeated .Channel channels = 1;</code>
     */
    private $channels;
    /**
     *
     * A version integer used to invalidate old save files when we make
     * incompatible changes This integer is set at build time and is private to
     * NodeDB.cpp in the device code.
     *
     * Generated from protobuf field <code>uint32 version = 2;</code>
     */
    private $version = 0;

    public function __construct() {
        \GPBMetadata\Deviceonly::initOnce();
        parent::__construct();
    }

    /**
     *
     * The channels our node knows about
     *
     * Generated from protobuf field <code>repeated .Channel channels = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     *
     * The channels our node knows about
     *
     * Generated from protobuf field <code>repeated .Channel channels = 1;</code>
     * @param \Channel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Channel::class);
        $this->channels = $arr;

        return $this;
    }

    /**
     *
     * A version integer used to invalidate old save files when we make
     * incompatible changes This integer is set at build time and is private to
     * NodeDB.cpp in the device code.
     *
     * Generated from protobuf field <code>uint32 version = 2;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *
     * A version integer used to invalidate old save files when we make
     * incompatible changes This integer is set at build time and is private to
     * NodeDB.cpp in the device code.
     *
     * Generated from protobuf field <code>uint32 version = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

        return $this;
    }

}

