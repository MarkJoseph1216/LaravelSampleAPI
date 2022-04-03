<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A track of an object instance.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.Track</code>
 */
class Track extends \Google\Protobuf\Internal\Message
{
    /**
     * Video segment of a track.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 1;</code>
     */
    private $segment = null;
    /**
     * The object with timestamp and attributes per frame in the track.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.TimestampedObject timestamped_objects = 2;</code>
     */
    private $timestamped_objects;
    /**
     * Optional. Attributes in the track level.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.DetectedAttribute attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $attributes;
    /**
     * Optional. The confidence score of the tracked object.
     *
     * Generated from protobuf field <code>float confidence = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $confidence = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VideoIntelligence\V1\VideoSegment $segment
     *           Video segment of a track.
     *     @type \Google\Cloud\VideoIntelligence\V1\TimestampedObject[]|\Google\Protobuf\Internal\RepeatedField $timestamped_objects
     *           The object with timestamp and attributes per frame in the track.
     *     @type \Google\Cloud\VideoIntelligence\V1\DetectedAttribute[]|\Google\Protobuf\Internal\RepeatedField $attributes
     *           Optional. Attributes in the track level.
     *     @type float $confidence
     *           Optional. The confidence score of the tracked object.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Video segment of a track.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 1;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\VideoSegment|null
     */
    public function getSegment()
    {
        return $this->segment;
    }

    public function hasSegment()
    {
        return isset($this->segment);
    }

    public function clearSegment()
    {
        unset($this->segment);
    }

    /**
     * Video segment of a track.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\VideoSegment $var
     * @return $this
     */
    public function setSegment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\VideoSegment::class);
        $this->segment = $var;

        return $this;
    }

    /**
     * The object with timestamp and attributes per frame in the track.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.TimestampedObject timestamped_objects = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTimestampedObjects()
    {
        return $this->timestamped_objects;
    }

    /**
     * The object with timestamp and attributes per frame in the track.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.TimestampedObject timestamped_objects = 2;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\TimestampedObject[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTimestampedObjects($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\TimestampedObject::class);
        $this->timestamped_objects = $arr;

        return $this;
    }

    /**
     * Optional. Attributes in the track level.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.DetectedAttribute attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Optional. Attributes in the track level.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.DetectedAttribute attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\VideoIntelligence\V1\DetectedAttribute[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\DetectedAttribute::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * Optional. The confidence score of the tracked object.
     *
     * Generated from protobuf field <code>float confidence = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Optional. The confidence score of the tracked object.
     *
     * Generated from protobuf field <code>float confidence = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

}

