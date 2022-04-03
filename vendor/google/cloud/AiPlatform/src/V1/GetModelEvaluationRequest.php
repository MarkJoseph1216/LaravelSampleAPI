<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [ModelService.GetModelEvaluation][google.cloud.aiplatform.v1.ModelService.GetModelEvaluation].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GetModelEvaluationRequest</code>
 */
class GetModelEvaluationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the ModelEvaluation resource.
     * Format:
     * `projects/{project}/locations/{location}/models/{model}/evaluations/{evaluation}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the ModelEvaluation resource.
     *           Format:
     *           `projects/{project}/locations/{location}/models/{model}/evaluations/{evaluation}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the ModelEvaluation resource.
     * Format:
     * `projects/{project}/locations/{location}/models/{model}/evaluations/{evaluation}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the ModelEvaluation resource.
     * Format:
     * `projects/{project}/locations/{location}/models/{model}/evaluations/{evaluation}`
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

}

