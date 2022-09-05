<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The rating of a [Product][google.cloud.retail.v2.Product].
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Rating</code>
 */
class Rating extends \Google\Protobuf\Internal\Message
{
    /**
     * The total number of ratings. This value is independent of the value of
     * [rating_histogram][google.cloud.retail.v2.Rating.rating_histogram].
     * This value must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>int32 rating_count = 1;</code>
     */
    private $rating_count = 0;
    /**
     * The average rating of the [Product][google.cloud.retail.v2.Product].
     * The rating is scaled at 1-5. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>float average_rating = 2;</code>
     */
    private $average_rating = 0.0;
    /**
     * List of rating counts per rating value (index = rating - 1). The list is
     * empty if there is no rating. If the list is non-empty, its size is
     * always 5. Otherwise, an INVALID_ARGUMENT error is returned.
     * For example, [41, 14, 13, 47, 303]. It means that the
     * [Product][google.cloud.retail.v2.Product] got 41 ratings with 1 star, 14
     * ratings with 2 star, and so on.
     *
     * Generated from protobuf field <code>repeated int32 rating_histogram = 3;</code>
     */
    private $rating_histogram;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $rating_count
     *           The total number of ratings. This value is independent of the value of
     *           [rating_histogram][google.cloud.retail.v2.Rating.rating_histogram].
     *           This value must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     *           returned.
     *     @type float $average_rating
     *           The average rating of the [Product][google.cloud.retail.v2.Product].
     *           The rating is scaled at 1-5. Otherwise, an INVALID_ARGUMENT error is
     *           returned.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $rating_histogram
     *           List of rating counts per rating value (index = rating - 1). The list is
     *           empty if there is no rating. If the list is non-empty, its size is
     *           always 5. Otherwise, an INVALID_ARGUMENT error is returned.
     *           For example, [41, 14, 13, 47, 303]. It means that the
     *           [Product][google.cloud.retail.v2.Product] got 41 ratings with 1 star, 14
     *           ratings with 2 star, and so on.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The total number of ratings. This value is independent of the value of
     * [rating_histogram][google.cloud.retail.v2.Rating.rating_histogram].
     * This value must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>int32 rating_count = 1;</code>
     * @return int
     */
    public function getRatingCount()
    {
        return $this->rating_count;
    }

    /**
     * The total number of ratings. This value is independent of the value of
     * [rating_histogram][google.cloud.retail.v2.Rating.rating_histogram].
     * This value must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>int32 rating_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRatingCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->rating_count = $var;

        return $this;
    }

    /**
     * The average rating of the [Product][google.cloud.retail.v2.Product].
     * The rating is scaled at 1-5. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>float average_rating = 2;</code>
     * @return float
     */
    public function getAverageRating()
    {
        return $this->average_rating;
    }

    /**
     * The average rating of the [Product][google.cloud.retail.v2.Product].
     * The rating is scaled at 1-5. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>float average_rating = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setAverageRating($var)
    {
        GPBUtil::checkFloat($var);
        $this->average_rating = $var;

        return $this;
    }

    /**
     * List of rating counts per rating value (index = rating - 1). The list is
     * empty if there is no rating. If the list is non-empty, its size is
     * always 5. Otherwise, an INVALID_ARGUMENT error is returned.
     * For example, [41, 14, 13, 47, 303]. It means that the
     * [Product][google.cloud.retail.v2.Product] got 41 ratings with 1 star, 14
     * ratings with 2 star, and so on.
     *
     * Generated from protobuf field <code>repeated int32 rating_histogram = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRatingHistogram()
    {
        return $this->rating_histogram;
    }

    /**
     * List of rating counts per rating value (index = rating - 1). The list is
     * empty if there is no rating. If the list is non-empty, its size is
     * always 5. Otherwise, an INVALID_ARGUMENT error is returned.
     * For example, [41, 14, 13, 47, 303]. It means that the
     * [Product][google.cloud.retail.v2.Product] got 41 ratings with 1 star, 14
     * ratings with 2 star, and so on.
     *
     * Generated from protobuf field <code>repeated int32 rating_histogram = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRatingHistogram($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->rating_histogram = $arr;

        return $this;
    }

}
