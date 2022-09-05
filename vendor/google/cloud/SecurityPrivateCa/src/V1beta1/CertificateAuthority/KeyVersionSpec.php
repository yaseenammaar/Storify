<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Cloud KMS key configuration that a [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] will use.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.CertificateAuthority.KeyVersionSpec</code>
 */
class KeyVersionSpec extends \Google\Protobuf\Internal\Message
{
    protected $KeyVersion;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cloud_kms_key_version
     *           Required. The resource name for an existing Cloud KMS CryptoKeyVersion in the
     *           format
     *           `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;&#47;cryptoKeyVersions/&#42;`.
     *           This option enables full flexibility in the key's capabilities and
     *           properties.
     *     @type int $algorithm
     *           Required. The algorithm to use for creating a managed Cloud KMS key for a for a
     *           simplified experience. All managed keys will be have their
     *           [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] as `HSM`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name for an existing Cloud KMS CryptoKeyVersion in the
     * format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;&#47;cryptoKeyVersions/&#42;`.
     * This option enables full flexibility in the key's capabilities and
     * properties.
     *
     * Generated from protobuf field <code>string cloud_kms_key_version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCloudKmsKeyVersion()
    {
        return $this->readOneof(1);
    }

    public function hasCloudKmsKeyVersion()
    {
        return $this->hasOneof(1);
    }

    /**
     * Required. The resource name for an existing Cloud KMS CryptoKeyVersion in the
     * format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;&#47;cryptoKeyVersions/&#42;`.
     * This option enables full flexibility in the key's capabilities and
     * properties.
     *
     * Generated from protobuf field <code>string cloud_kms_key_version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCloudKmsKeyVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Required. The algorithm to use for creating a managed Cloud KMS key for a for a
     * simplified experience. All managed keys will be have their
     * [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] as `HSM`.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority.SignHashAlgorithm algorithm = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAlgorithm()
    {
        return $this->readOneof(2);
    }

    public function hasAlgorithm()
    {
        return $this->hasOneof(2);
    }

    /**
     * Required. The algorithm to use for creating a managed Cloud KMS key for a for a
     * simplified experience. All managed keys will be have their
     * [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] as `HSM`.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority.SignHashAlgorithm algorithm = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\SignHashAlgorithm::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyVersion()
    {
        return $this->whichOneof("KeyVersion");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeyVersionSpec::class, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority_KeyVersionSpec::class);

