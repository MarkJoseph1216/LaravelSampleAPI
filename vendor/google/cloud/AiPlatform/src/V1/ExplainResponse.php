<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [PredictionService.Explain][google.cloud.aiplatform.v1.PredictionService.Explain].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExplainResponse</code>
 */
class ExplainResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The explanations of the Model's [PredictResponse.predictions][google.cloud.aiplatform.v1.PredictResponse.predictions].
     * It has the same number of elements as [instances][google.cloud.aiplatform.v1.ExplainRequest.instances]
     * to be explained.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Explanation explanations = 1;</code>
     */
    private $explanations;
    /**
     * ID of the Endpoint's DeployedModel that served this explanation.
     *
     * Generated from protobuf field <code>string deployed_model_id = 2;</code>
     */
    private $deployed_model_id = '';
    /**
     * The predictions that are the output of the predictions call.
     * Same as [PredictResponse.predictions][google.cloud.aiplatform.v1.PredictResponse.predictions].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value predictions = 3;</code>
     */
    private $predictions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Explanation[]|\Google\Protobuf\Internal\RepeatedField $explanations
     *           The explanations of the Model's [PredictResponse.predictions][google.cloud.aiplatform.v1.PredictResponse.predictions].
     *           It has the same number of elements as [instances][google.cloud.aiplatform.v1.ExplainRequest.instances]
     *           to be explained.
     *     @type string $deployed_model_id
     *           ID of the Endpoint's DeployedModel that served this explanation.
     *     @type \Google\Protobuf\Value[]|\Google\Protobuf\Internal\RepeatedField $predictions
     *           The predictions that are the output of the predictions call.
     *           Same as [PredictResponse.predictions][google.cloud.aiplatform.v1.PredictResponse.predictions].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * The explanations of the Model's [PredictResponse.predictions][google.cloud.aiplatform.v1.PredictResponse.predictions].
     * It has the same number of elements as [instances][google.cloud.aiplatform.v1.ExplainRequest.instances]
     * to be explained.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Explanation explanations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExplanations()
    {
        return $this->explanations;
    }

    /**
     * The explanations of the Model's [PredictResponse.predictions][google.cloud.aiplatform.v1.PredictResponse.predictions].
     * It has the same number of elements as [instances][google.cloud.aiplatform.v1.ExplainRequest.instances]
     * to be explained.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Explanation explanations = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\Explanation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExplanations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Explanation::class);
        $this->explanations = $arr;

        return $this;
    }

    /**
     * ID of the Endpoint's DeployedModel that served this explanation.
     *
     * Generated from protobuf field <code>string deployed_model_id = 2;</code>
     * @return string
     */
    public function getDeployedModelId()
    {
        return $this->deployed_model_id;
    }

    /**
     * ID of the Endpoint's DeployedModel that served this explanation.
     *
     * Generated from protobuf field <code>string deployed_model_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDeployedModelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployed_model_id = $var;

        return $this;
    }

    /**
     * The predictions that are the output of the predictions call.
     * Same as [PredictResponse.predictions][google.cloud.aiplatform.v1.PredictResponse.predictions].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value predictions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPredictions()
    {
        return $this->predictions;
    }

    /**
     * The predictions that are the output of the predictions call.
     * Same as [PredictResponse.predictions][google.cloud.aiplatform.v1.PredictResponse.predictions].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value predictions = 3;</code>
     * @param \Google\Protobuf\Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPredictions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->predictions = $arr;

        return $this;
    }

}

