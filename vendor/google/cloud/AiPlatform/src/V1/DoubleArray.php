<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/types.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of double values.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DoubleArray</code>
 */
class DoubleArray extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of bool values.
     *
     * Generated from protobuf field <code>repeated double values = 1;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $values
     *           A list of bool values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of bool values.
     *
     * Generated from protobuf field <code>repeated double values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * A list of bool values.
     *
     * Generated from protobuf field <code>repeated double values = 1;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->values = $arr;

        return $this;
    }

}

