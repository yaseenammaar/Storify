<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/orgpolicy.proto

namespace Google\Cloud\OrgPolicy\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response returned from the [ListPolicies]
 * [google.cloud.orgpolicy.v2.OrgPolicy.ListPolicies] method. It will be empty
 * if no `Policies` are set on the resource.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.ListPoliciesResponse</code>
 */
class ListPoliciesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * All `Policies` that exist on the resource. It will be empty if no
     * `Policies` are set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.orgpolicy.v2.Policy policies = 1;</code>
     */
    private $policies;
    /**
     * Page token used to retrieve the next page. This is currently not used, but
     * the server may at any point start supplying a valid token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OrgPolicy\V2\Policy[]|\Google\Protobuf\Internal\RepeatedField $policies
     *           All `Policies` that exist on the resource. It will be empty if no
     *           `Policies` are set.
     *     @type string $next_page_token
     *           Page token used to retrieve the next page. This is currently not used, but
     *           the server may at any point start supplying a valid token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * All `Policies` that exist on the resource. It will be empty if no
     * `Policies` are set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.orgpolicy.v2.Policy policies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * All `Policies` that exist on the resource. It will be empty if no
     * `Policies` are set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.orgpolicy.v2.Policy policies = 1;</code>
     * @param \Google\Cloud\OrgPolicy\V2\Policy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OrgPolicy\V2\Policy::class);
        $this->policies = $arr;

        return $this;
    }

    /**
     * Page token used to retrieve the next page. This is currently not used, but
     * the server may at any point start supplying a valid token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Page token used to retrieve the next page. This is currently not used, but
     * the server may at any point start supplying a valid token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

