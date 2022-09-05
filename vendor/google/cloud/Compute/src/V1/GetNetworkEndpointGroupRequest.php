<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for NetworkEndpointGroups.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetNetworkEndpointGroupRequest</code>
 */
class GetNetworkEndpointGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the network endpoint group. It should comply with RFC1035.
     *
     * Generated from protobuf field <code>string network_endpoint_group = 433907078 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $network_endpoint_group = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * The name of the zone where the network endpoint group is located. It should comply with RFC1035.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network_endpoint_group
     *           The name of the network endpoint group. It should comply with RFC1035.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $zone
     *           The name of the zone where the network endpoint group is located. It should comply with RFC1035.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the network endpoint group. It should comply with RFC1035.
     *
     * Generated from protobuf field <code>string network_endpoint_group = 433907078 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNetworkEndpointGroup()
    {
        return $this->network_endpoint_group;
    }

    /**
     * The name of the network endpoint group. It should comply with RFC1035.
     *
     * Generated from protobuf field <code>string network_endpoint_group = 433907078 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkEndpointGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_endpoint_group = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * The name of the zone where the network endpoint group is located. It should comply with RFC1035.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the zone where the network endpoint group is located. It should comply with RFC1035.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

