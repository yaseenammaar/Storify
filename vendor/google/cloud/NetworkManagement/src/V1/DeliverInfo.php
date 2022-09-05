<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of the final state "deliver" and associated resource.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.DeliverInfo</code>
 */
class DeliverInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Target type where the packet is delivered to.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DeliverInfo.Target target = 1;</code>
     */
    private $target = 0;
    /**
     * URI of the resource that the packet is delivered to.
     *
     * Generated from protobuf field <code>string resource_uri = 2;</code>
     */
    private $resource_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $target
     *           Target type where the packet is delivered to.
     *     @type string $resource_uri
     *           URI of the resource that the packet is delivered to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * Target type where the packet is delivered to.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DeliverInfo.Target target = 1;</code>
     * @return int
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Target type where the packet is delivered to.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DeliverInfo.Target target = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkManagement\V1\DeliverInfo\Target::class);
        $this->target = $var;

        return $this;
    }

    /**
     * URI of the resource that the packet is delivered to.
     *
     * Generated from protobuf field <code>string resource_uri = 2;</code>
     * @return string
     */
    public function getResourceUri()
    {
        return $this->resource_uri;
    }

    /**
     * URI of the resource that the packet is delivered to.
     *
     * Generated from protobuf field <code>string resource_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_uri = $var;

        return $this;
    }

}

