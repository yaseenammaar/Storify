<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1\PullRequestFilter;

use UnexpectedValueException;

/**
 * Controls behavior of Pull Request comments.
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.PullRequestFilter.CommentControl</code>
 */
class CommentControl
{
    /**
     * Do not require comments on Pull Requests before builds are triggered.
     *
     * Generated from protobuf enum <code>COMMENTS_DISABLED = 0;</code>
     */
    const COMMENTS_DISABLED = 0;
    /**
     * Enforce that repository owners or collaborators must comment on Pull
     * Requests before builds are triggered.
     *
     * Generated from protobuf enum <code>COMMENTS_ENABLED = 1;</code>
     */
    const COMMENTS_ENABLED = 1;
    /**
     * Enforce that repository owners or collaborators must comment on external
     * contributors' Pull Requests before builds are triggered.
     *
     * Generated from protobuf enum <code>COMMENTS_ENABLED_FOR_EXTERNAL_CONTRIBUTORS_ONLY = 2;</code>
     */
    const COMMENTS_ENABLED_FOR_EXTERNAL_CONTRIBUTORS_ONLY = 2;

    private static $valueToName = [
        self::COMMENTS_DISABLED => 'COMMENTS_DISABLED',
        self::COMMENTS_ENABLED => 'COMMENTS_ENABLED',
        self::COMMENTS_ENABLED_FOR_EXTERNAL_CONTRIBUTORS_ONLY => 'COMMENTS_ENABLED_FOR_EXTERNAL_CONTRIBUTORS_ONLY',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CommentControl::class, \Google\Cloud\Build\V1\PullRequestFilter_CommentControl::class);

