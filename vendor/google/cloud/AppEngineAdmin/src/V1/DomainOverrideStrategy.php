<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Cloud\AppEngine\V1;

use UnexpectedValueException;

/**
 * Override strategy for mutating an existing mapping.
 *
 * Protobuf type <code>google.appengine.v1.DomainOverrideStrategy</code>
 */
class DomainOverrideStrategy
{
    /**
     * Strategy unspecified. Defaults to `STRICT`.
     *
     * Generated from protobuf enum <code>UNSPECIFIED_DOMAIN_OVERRIDE_STRATEGY = 0;</code>
     */
    const UNSPECIFIED_DOMAIN_OVERRIDE_STRATEGY = 0;
    /**
     * Overrides not allowed. If a mapping already exists for the
     * specified domain, the request will return an ALREADY_EXISTS (409).
     *
     * Generated from protobuf enum <code>STRICT = 1;</code>
     */
    const STRICT = 1;
    /**
     * Overrides allowed. If a mapping already exists for the specified domain,
     * the request will overwrite it. Note that this might stop another
     * Google product from serving. For example, if the domain is
     * mapped to another App Engine application, that app will no
     * longer serve from that domain.
     *
     * Generated from protobuf enum <code>OVERRIDE = 2;</code>
     */
    const OVERRIDE = 2;

    private static $valueToName = [
        self::UNSPECIFIED_DOMAIN_OVERRIDE_STRATEGY => 'UNSPECIFIED_DOMAIN_OVERRIDE_STRATEGY',
        self::STRICT => 'STRICT',
        self::OVERRIDE => 'OVERRIDE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

