<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [GetQueue][google.cloud.tasks.v2beta2.CloudTasks.GetQueue].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta2.GetQueueRequest</code>
 */
class GetQueueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the queue. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. Read mask is used for a more granular control over what the API returns.
     * If the mask is not present all fields will be returned except
     * [Queue.stats]. [Queue.stats] will be returned only if it was  explicitly
     * specified in the mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $read_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the queue. For example:
     *           `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Optional. Read mask is used for a more granular control over what the API returns.
     *           If the mask is not present all fields will be returned except
     *           [Queue.stats]. [Queue.stats] will be returned only if it was  explicitly
     *           specified in the mask.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Cloudtasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the queue. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the queue. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
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
     * Optional. Read mask is used for a more granular control over what the API returns.
     * If the mask is not present all fields will be returned except
     * [Queue.stats]. [Queue.stats] will be returned only if it was  explicitly
     * specified in the mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Optional. Read mask is used for a more granular control over what the API returns.
     * If the mask is not present all fields will be returned except
     * [Queue.stats]. [Queue.stats] will be returned only if it was  explicitly
     * specified in the mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

}

