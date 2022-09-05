<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/service.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Service resource is a logical component of an application that can share
 * state and communicate in a secure fashion with other services.
 * For example, an application that handles customer requests might
 * include separate services to handle tasks such as backend data
 * analysis or API requests from mobile devices. Each service has a
 * collection of versions that define a specific set of code used to
 * implement the functionality of that service.
 *
 * Generated from protobuf message <code>google.appengine.v1.Service</code>
 */
class Service extends \Google\Protobuf\Internal\Message
{
    /**
     * Full path to the Service resource in the API.
     * Example: `apps/myapp/services/default`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Relative name of the service within the application.
     * Example: `default`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    private $id = '';
    /**
     * Mapping that defines fractional HTTP traffic diversion to
     * different versions within the service.
     *
     * Generated from protobuf field <code>.google.appengine.v1.TrafficSplit split = 3;</code>
     */
    private $split = null;
    /**
     * Ingress settings for this service. Will apply to all versions.
     *
     * Generated from protobuf field <code>.google.appengine.v1.NetworkSettings network_settings = 6;</code>
     */
    private $network_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Full path to the Service resource in the API.
     *           Example: `apps/myapp/services/default`.
     *           &#64;OutputOnly
     *     @type string $id
     *           Relative name of the service within the application.
     *           Example: `default`.
     *           &#64;OutputOnly
     *     @type \Google\Cloud\AppEngine\V1\TrafficSplit $split
     *           Mapping that defines fractional HTTP traffic diversion to
     *           different versions within the service.
     *     @type \Google\Cloud\AppEngine\V1\NetworkSettings $network_settings
     *           Ingress settings for this service. Will apply to all versions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Full path to the Service resource in the API.
     * Example: `apps/myapp/services/default`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Full path to the Service resource in the API.
     * Example: `apps/myapp/services/default`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Relative name of the service within the application.
     * Example: `default`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Relative name of the service within the application.
     * Example: `default`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Mapping that defines fractional HTTP traffic diversion to
     * different versions within the service.
     *
     * Generated from protobuf field <code>.google.appengine.v1.TrafficSplit split = 3;</code>
     * @return \Google\Cloud\AppEngine\V1\TrafficSplit|null
     */
    public function getSplit()
    {
        return $this->split;
    }

    public function hasSplit()
    {
        return isset($this->split);
    }

    public function clearSplit()
    {
        unset($this->split);
    }

    /**
     * Mapping that defines fractional HTTP traffic diversion to
     * different versions within the service.
     *
     * Generated from protobuf field <code>.google.appengine.v1.TrafficSplit split = 3;</code>
     * @param \Google\Cloud\AppEngine\V1\TrafficSplit $var
     * @return $this
     */
    public function setSplit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppEngine\V1\TrafficSplit::class);
        $this->split = $var;

        return $this;
    }

    /**
     * Ingress settings for this service. Will apply to all versions.
     *
     * Generated from protobuf field <code>.google.appengine.v1.NetworkSettings network_settings = 6;</code>
     * @return \Google\Cloud\AppEngine\V1\NetworkSettings|null
     */
    public function getNetworkSettings()
    {
        return $this->network_settings;
    }

    public function hasNetworkSettings()
    {
        return isset($this->network_settings);
    }

    public function clearNetworkSettings()
    {
        unset($this->network_settings);
    }

    /**
     * Ingress settings for this service. Will apply to all versions.
     *
     * Generated from protobuf field <code>.google.appengine.v1.NetworkSettings network_settings = 6;</code>
     * @param \Google\Cloud\AppEngine\V1\NetworkSettings $var
     * @return $this
     */
    public function setNetworkSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppEngine\V1\NetworkSettings::class);
        $this->network_settings = $var;

        return $this;
    }

}

