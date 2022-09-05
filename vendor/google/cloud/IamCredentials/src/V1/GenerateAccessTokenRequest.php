<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/credentials/v1/common.proto

namespace Google\Cloud\Iam\Credentials\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.iam.credentials.v1.GenerateAccessTokenRequest</code>
 */
class GenerateAccessTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the service account for which the credentials
     * are requested, in the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The sequence of service accounts in a delegation chain. Each service
     * account must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on its next service account in the chain. The last service account in the
     * chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on the service account that is specified in the `name` field of the
     * request.
     * The delegates must have the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>repeated string delegates = 2;</code>
     */
    private $delegates;
    /**
     * Required. Code to identify the scopes to be included in the OAuth 2.0 access token.
     * See https://developers.google.com/identity/protocols/googlescopes for more
     * information.
     * At least one value required.
     *
     * Generated from protobuf field <code>repeated string scope = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $scope;
    /**
     * The desired lifetime duration of the access token in seconds.
     * Must be set to a value less than or equal to 3600 (1 hour). If a value is
     * not specified, the token's lifetime will be set to a default value of one
     * hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 7;</code>
     */
    private $lifetime = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the service account for which the credentials
     *           are requested, in the following format:
     *           `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *           character is required; replacing it with a project ID is invalid.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $delegates
     *           The sequence of service accounts in a delegation chain. Each service
     *           account must be granted the `roles/iam.serviceAccountTokenCreator` role
     *           on its next service account in the chain. The last service account in the
     *           chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     *           on the service account that is specified in the `name` field of the
     *           request.
     *           The delegates must have the following format:
     *           `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *           character is required; replacing it with a project ID is invalid.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $scope
     *           Required. Code to identify the scopes to be included in the OAuth 2.0 access token.
     *           See https://developers.google.com/identity/protocols/googlescopes for more
     *           information.
     *           At least one value required.
     *     @type \Google\Protobuf\Duration $lifetime
     *           The desired lifetime duration of the access token in seconds.
     *           Must be set to a value less than or equal to 3600 (1 hour). If a value is
     *           not specified, the token's lifetime will be set to a default value of one
     *           hour.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\Credentials\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the service account for which the credentials
     * are requested, in the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the service account for which the credentials
     * are requested, in the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * The sequence of service accounts in a delegation chain. Each service
     * account must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on its next service account in the chain. The last service account in the
     * chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on the service account that is specified in the `name` field of the
     * request.
     * The delegates must have the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>repeated string delegates = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDelegates()
    {
        return $this->delegates;
    }

    /**
     * The sequence of service accounts in a delegation chain. Each service
     * account must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on its next service account in the chain. The last service account in the
     * chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on the service account that is specified in the `name` field of the
     * request.
     * The delegates must have the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>repeated string delegates = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDelegates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->delegates = $arr;

        return $this;
    }

    /**
     * Required. Code to identify the scopes to be included in the OAuth 2.0 access token.
     * See https://developers.google.com/identity/protocols/googlescopes for more
     * information.
     * At least one value required.
     *
     * Generated from protobuf field <code>repeated string scope = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Required. Code to identify the scopes to be included in the OAuth 2.0 access token.
     * See https://developers.google.com/identity/protocols/googlescopes for more
     * information.
     * At least one value required.
     *
     * Generated from protobuf field <code>repeated string scope = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScope($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scope = $arr;

        return $this;
    }

    /**
     * The desired lifetime duration of the access token in seconds.
     * Must be set to a value less than or equal to 3600 (1 hour). If a value is
     * not specified, the token's lifetime will be set to a default value of one
     * hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 7;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLifetime()
    {
        return isset($this->lifetime) ? $this->lifetime : null;
    }

    public function hasLifetime()
    {
        return isset($this->lifetime);
    }

    public function clearLifetime()
    {
        unset($this->lifetime);
    }

    /**
     * The desired lifetime duration of the access token in seconds.
     * Must be set to a value less than or equal to 3600 (1 hour). If a value is
     * not specified, the token's lifetime will be set to a default value of one
     * hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 7;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lifetime = $var;

        return $this;
    }

}

