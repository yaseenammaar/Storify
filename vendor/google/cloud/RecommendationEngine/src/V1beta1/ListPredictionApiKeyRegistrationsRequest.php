<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/prediction_apikey_registry_service.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `ListPredictionApiKeyRegistrations`.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.ListPredictionApiKeyRegistrationsRequest</code>
 */
class ListPredictionApiKeyRegistrationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent placement resource name such as
     * `projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. Maximum number of results to return per page. If unset, the
     * service will choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. The previous `ListPredictionApiKeyRegistration.nextPageToken`.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent placement resource name such as
     *           `projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store`
     *     @type int $page_size
     *           Optional. Maximum number of results to return per page. If unset, the
     *           service will choose a reasonable default.
     *     @type string $page_token
     *           Optional. The previous `ListPredictionApiKeyRegistration.nextPageToken`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\PredictionApikeyRegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent placement resource name such as
     * `projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent placement resource name such as
     * `projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. Maximum number of results to return per page. If unset, the
     * service will choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Maximum number of results to return per page. If unset, the
     * service will choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The previous `ListPredictionApiKeyRegistration.nextPageToken`.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The previous `ListPredictionApiKeyRegistration.nextPageToken`.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

