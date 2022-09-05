<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message representing a rule in the phrase matcher.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.PhraseMatchRuleGroup</code>
 */
class PhraseMatchRuleGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The type of this phrase match rule group.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.PhraseMatchRuleGroup.PhraseMatchRuleGroupType type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $type = 0;
    /**
     * A list of phase match rules that are included in this group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.PhraseMatchRule phrase_match_rules = 2;</code>
     */
    private $phrase_match_rules;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Required. The type of this phrase match rule group.
     *     @type \Google\Cloud\ContactCenterInsights\V1\PhraseMatchRule[]|\Google\Protobuf\Internal\RepeatedField $phrase_match_rules
     *           A list of phase match rules that are included in this group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The type of this phrase match rule group.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.PhraseMatchRuleGroup.PhraseMatchRuleGroupType type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The type of this phrase match rule group.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.PhraseMatchRuleGroup.PhraseMatchRuleGroupType type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\PhraseMatchRuleGroup\PhraseMatchRuleGroupType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * A list of phase match rules that are included in this group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.PhraseMatchRule phrase_match_rules = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhraseMatchRules()
    {
        return $this->phrase_match_rules;
    }

    /**
     * A list of phase match rules that are included in this group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.PhraseMatchRule phrase_match_rules = 2;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\PhraseMatchRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhraseMatchRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ContactCenterInsights\V1\PhraseMatchRule::class);
        $this->phrase_match_rules = $arr;

        return $this;
    }

}

