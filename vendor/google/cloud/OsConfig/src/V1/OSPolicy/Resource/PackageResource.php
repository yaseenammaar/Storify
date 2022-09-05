<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy.proto

namespace Google\Cloud\OsConfig\V1\OSPolicy\Resource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource that manages a system package.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource</code>
 */
class PackageResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The desired state the agent should maintain for this package.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.DesiredState desired_state = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $desired_state = 0;
    protected $system_package;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $desired_state
     *           Required. The desired state the agent should maintain for this package.
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\APT $apt
     *           A package managed by Apt.
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\Deb $deb
     *           A deb package file.
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\YUM $yum
     *           A package managed by YUM.
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\Zypper $zypper
     *           A package managed by Zypper.
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\RPM $rpm
     *           An rpm package file.
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\GooGet $googet
     *           A package managed by GooGet.
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\MSI $msi
     *           An MSI package.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The desired state the agent should maintain for this package.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.DesiredState desired_state = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getDesiredState()
    {
        return $this->desired_state;
    }

    /**
     * Required. The desired state the agent should maintain for this package.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.DesiredState desired_state = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setDesiredState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\DesiredState::class);
        $this->desired_state = $var;

        return $this;
    }

    /**
     * A package managed by Apt.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.APT apt = 2;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\APT|null
     */
    public function getApt()
    {
        return $this->readOneof(2);
    }

    public function hasApt()
    {
        return $this->hasOneof(2);
    }

    /**
     * A package managed by Apt.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.APT apt = 2;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\APT $var
     * @return $this
     */
    public function setApt($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\APT::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A deb package file.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.Deb deb = 3;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\Deb|null
     */
    public function getDeb()
    {
        return $this->readOneof(3);
    }

    public function hasDeb()
    {
        return $this->hasOneof(3);
    }

    /**
     * A deb package file.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.Deb deb = 3;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\Deb $var
     * @return $this
     */
    public function setDeb($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\Deb::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A package managed by YUM.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.YUM yum = 4;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\YUM|null
     */
    public function getYum()
    {
        return $this->readOneof(4);
    }

    public function hasYum()
    {
        return $this->hasOneof(4);
    }

    /**
     * A package managed by YUM.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.YUM yum = 4;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\YUM $var
     * @return $this
     */
    public function setYum($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\YUM::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A package managed by Zypper.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.Zypper zypper = 5;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\Zypper|null
     */
    public function getZypper()
    {
        return $this->readOneof(5);
    }

    public function hasZypper()
    {
        return $this->hasOneof(5);
    }

    /**
     * A package managed by Zypper.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.Zypper zypper = 5;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\Zypper $var
     * @return $this
     */
    public function setZypper($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\Zypper::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * An rpm package file.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.RPM rpm = 6;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\RPM|null
     */
    public function getRpm()
    {
        return $this->readOneof(6);
    }

    public function hasRpm()
    {
        return $this->hasOneof(6);
    }

    /**
     * An rpm package file.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.RPM rpm = 6;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\RPM $var
     * @return $this
     */
    public function setRpm($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\RPM::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * A package managed by GooGet.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.GooGet googet = 7;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\GooGet|null
     */
    public function getGooget()
    {
        return $this->readOneof(7);
    }

    public function hasGooget()
    {
        return $this->hasOneof(7);
    }

    /**
     * A package managed by GooGet.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.GooGet googet = 7;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\GooGet $var
     * @return $this
     */
    public function setGooget($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\GooGet::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * An MSI package.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.MSI msi = 8;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\MSI|null
     */
    public function getMsi()
    {
        return $this->readOneof(8);
    }

    public function hasMsi()
    {
        return $this->hasOneof(8);
    }

    /**
     * An MSI package.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource.MSI msi = 8;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\MSI $var
     * @return $this
     */
    public function setMsi($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource\MSI::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSystemPackage()
    {
        return $this->whichOneof("system_package");
    }

}


