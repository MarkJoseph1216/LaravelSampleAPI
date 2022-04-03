<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [Participants.AnalyzeContent][google.cloud.dialogflow.v2.Participants.AnalyzeContent].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.AnalyzeContentResponse</code>
 */
class AnalyzeContentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The output text content.
     * This field is set if the automated agent responded with text to show to
     * the user.
     *
     * Generated from protobuf field <code>string reply_text = 1;</code>
     */
    private $reply_text = '';
    /**
     * The audio data bytes encoded as specified in the request.
     * This field is set if:
     *  - `reply_audio_config` was specified in the request, or
     *  - The automated agent responded with audio to play to the user. In such
     *    case, `reply_audio.config` contains settings used to synthesize the
     *    speech.
     * In some scenarios, multiple output audio fields may be present in the
     * response structure. In these cases, only the top-most-level audio output
     * has content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudio reply_audio = 2;</code>
     */
    private $reply_audio = null;
    /**
     * Only set if a Dialogflow automated agent has responded.
     * Note that: [AutomatedAgentReply.detect_intent_response.output_audio][]
     * and [AutomatedAgentReply.detect_intent_response.output_audio_config][]
     * are always empty, use [reply_audio][google.cloud.dialogflow.v2.AnalyzeContentResponse.reply_audio] instead.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AutomatedAgentReply automated_agent_reply = 3;</code>
     */
    private $automated_agent_reply = null;
    /**
     * Message analyzed by CCAI.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Message message = 5;</code>
     */
    private $message = null;
    /**
     * The suggestions for most recent human agent. The order is the same as
     * [HumanAgentAssistantConfig.SuggestionConfig.feature_configs][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig.feature_configs] of
     * [HumanAgentAssistantConfig.human_agent_suggestion_config][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.human_agent_suggestion_config].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SuggestionResult human_agent_suggestion_results = 6;</code>
     */
    private $human_agent_suggestion_results;
    /**
     * The suggestions for end user. The order is the same as
     * [HumanAgentAssistantConfig.SuggestionConfig.feature_configs][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig.feature_configs] of
     * [HumanAgentAssistantConfig.end_user_suggestion_config][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.end_user_suggestion_config].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SuggestionResult end_user_suggestion_results = 7;</code>
     */
    private $end_user_suggestion_results;
    /**
     * Indicates the parameters of DTMF.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.DtmfParameters dtmf_parameters = 9;</code>
     */
    private $dtmf_parameters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reply_text
     *           The output text content.
     *           This field is set if the automated agent responded with text to show to
     *           the user.
     *     @type \Google\Cloud\Dialogflow\V2\OutputAudio $reply_audio
     *           The audio data bytes encoded as specified in the request.
     *           This field is set if:
     *            - `reply_audio_config` was specified in the request, or
     *            - The automated agent responded with audio to play to the user. In such
     *              case, `reply_audio.config` contains settings used to synthesize the
     *              speech.
     *           In some scenarios, multiple output audio fields may be present in the
     *           response structure. In these cases, only the top-most-level audio output
     *           has content.
     *     @type \Google\Cloud\Dialogflow\V2\AutomatedAgentReply $automated_agent_reply
     *           Only set if a Dialogflow automated agent has responded.
     *           Note that: [AutomatedAgentReply.detect_intent_response.output_audio][]
     *           and [AutomatedAgentReply.detect_intent_response.output_audio_config][]
     *           are always empty, use [reply_audio][google.cloud.dialogflow.v2.AnalyzeContentResponse.reply_audio] instead.
     *     @type \Google\Cloud\Dialogflow\V2\Message $message
     *           Message analyzed by CCAI.
     *     @type \Google\Cloud\Dialogflow\V2\SuggestionResult[]|\Google\Protobuf\Internal\RepeatedField $human_agent_suggestion_results
     *           The suggestions for most recent human agent. The order is the same as
     *           [HumanAgentAssistantConfig.SuggestionConfig.feature_configs][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig.feature_configs] of
     *           [HumanAgentAssistantConfig.human_agent_suggestion_config][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.human_agent_suggestion_config].
     *     @type \Google\Cloud\Dialogflow\V2\SuggestionResult[]|\Google\Protobuf\Internal\RepeatedField $end_user_suggestion_results
     *           The suggestions for end user. The order is the same as
     *           [HumanAgentAssistantConfig.SuggestionConfig.feature_configs][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig.feature_configs] of
     *           [HumanAgentAssistantConfig.end_user_suggestion_config][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.end_user_suggestion_config].
     *     @type \Google\Cloud\Dialogflow\V2\DtmfParameters $dtmf_parameters
     *           Indicates the parameters of DTMF.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * The output text content.
     * This field is set if the automated agent responded with text to show to
     * the user.
     *
     * Generated from protobuf field <code>string reply_text = 1;</code>
     * @return string
     */
    public function getReplyText()
    {
        return $this->reply_text;
    }

    /**
     * The output text content.
     * This field is set if the automated agent responded with text to show to
     * the user.
     *
     * Generated from protobuf field <code>string reply_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReplyText($var)
    {
        GPBUtil::checkString($var, True);
        $this->reply_text = $var;

        return $this;
    }

    /**
     * The audio data bytes encoded as specified in the request.
     * This field is set if:
     *  - `reply_audio_config` was specified in the request, or
     *  - The automated agent responded with audio to play to the user. In such
     *    case, `reply_audio.config` contains settings used to synthesize the
     *    speech.
     * In some scenarios, multiple output audio fields may be present in the
     * response structure. In these cases, only the top-most-level audio output
     * has content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudio reply_audio = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2\OutputAudio|null
     */
    public function getReplyAudio()
    {
        return $this->reply_audio;
    }

    public function hasReplyAudio()
    {
        return isset($this->reply_audio);
    }

    public function clearReplyAudio()
    {
        unset($this->reply_audio);
    }

    /**
     * The audio data bytes encoded as specified in the request.
     * This field is set if:
     *  - `reply_audio_config` was specified in the request, or
     *  - The automated agent responded with audio to play to the user. In such
     *    case, `reply_audio.config` contains settings used to synthesize the
     *    speech.
     * In some scenarios, multiple output audio fields may be present in the
     * response structure. In these cases, only the top-most-level audio output
     * has content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudio reply_audio = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\OutputAudio $var
     * @return $this
     */
    public function setReplyAudio($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\OutputAudio::class);
        $this->reply_audio = $var;

        return $this;
    }

    /**
     * Only set if a Dialogflow automated agent has responded.
     * Note that: [AutomatedAgentReply.detect_intent_response.output_audio][]
     * and [AutomatedAgentReply.detect_intent_response.output_audio_config][]
     * are always empty, use [reply_audio][google.cloud.dialogflow.v2.AnalyzeContentResponse.reply_audio] instead.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AutomatedAgentReply automated_agent_reply = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2\AutomatedAgentReply|null
     */
    public function getAutomatedAgentReply()
    {
        return $this->automated_agent_reply;
    }

    public function hasAutomatedAgentReply()
    {
        return isset($this->automated_agent_reply);
    }

    public function clearAutomatedAgentReply()
    {
        unset($this->automated_agent_reply);
    }

    /**
     * Only set if a Dialogflow automated agent has responded.
     * Note that: [AutomatedAgentReply.detect_intent_response.output_audio][]
     * and [AutomatedAgentReply.detect_intent_response.output_audio_config][]
     * are always empty, use [reply_audio][google.cloud.dialogflow.v2.AnalyzeContentResponse.reply_audio] instead.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AutomatedAgentReply automated_agent_reply = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2\AutomatedAgentReply $var
     * @return $this
     */
    public function setAutomatedAgentReply($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\AutomatedAgentReply::class);
        $this->automated_agent_reply = $var;

        return $this;
    }

    /**
     * Message analyzed by CCAI.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Message message = 5;</code>
     * @return \Google\Cloud\Dialogflow\V2\Message|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Message analyzed by CCAI.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Message message = 5;</code>
     * @param \Google\Cloud\Dialogflow\V2\Message $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Message::class);
        $this->message = $var;

        return $this;
    }

    /**
     * The suggestions for most recent human agent. The order is the same as
     * [HumanAgentAssistantConfig.SuggestionConfig.feature_configs][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig.feature_configs] of
     * [HumanAgentAssistantConfig.human_agent_suggestion_config][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.human_agent_suggestion_config].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SuggestionResult human_agent_suggestion_results = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHumanAgentSuggestionResults()
    {
        return $this->human_agent_suggestion_results;
    }

    /**
     * The suggestions for most recent human agent. The order is the same as
     * [HumanAgentAssistantConfig.SuggestionConfig.feature_configs][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig.feature_configs] of
     * [HumanAgentAssistantConfig.human_agent_suggestion_config][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.human_agent_suggestion_config].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SuggestionResult human_agent_suggestion_results = 6;</code>
     * @param \Google\Cloud\Dialogflow\V2\SuggestionResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHumanAgentSuggestionResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\SuggestionResult::class);
        $this->human_agent_suggestion_results = $arr;

        return $this;
    }

    /**
     * The suggestions for end user. The order is the same as
     * [HumanAgentAssistantConfig.SuggestionConfig.feature_configs][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig.feature_configs] of
     * [HumanAgentAssistantConfig.end_user_suggestion_config][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.end_user_suggestion_config].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SuggestionResult end_user_suggestion_results = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndUserSuggestionResults()
    {
        return $this->end_user_suggestion_results;
    }

    /**
     * The suggestions for end user. The order is the same as
     * [HumanAgentAssistantConfig.SuggestionConfig.feature_configs][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig.feature_configs] of
     * [HumanAgentAssistantConfig.end_user_suggestion_config][google.cloud.dialogflow.v2.HumanAgentAssistantConfig.end_user_suggestion_config].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SuggestionResult end_user_suggestion_results = 7;</code>
     * @param \Google\Cloud\Dialogflow\V2\SuggestionResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndUserSuggestionResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\SuggestionResult::class);
        $this->end_user_suggestion_results = $arr;

        return $this;
    }

    /**
     * Indicates the parameters of DTMF.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.DtmfParameters dtmf_parameters = 9;</code>
     * @return \Google\Cloud\Dialogflow\V2\DtmfParameters|null
     */
    public function getDtmfParameters()
    {
        return $this->dtmf_parameters;
    }

    public function hasDtmfParameters()
    {
        return isset($this->dtmf_parameters);
    }

    public function clearDtmfParameters()
    {
        unset($this->dtmf_parameters);
    }

    /**
     * Indicates the parameters of DTMF.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.DtmfParameters dtmf_parameters = 9;</code>
     * @param \Google\Cloud\Dialogflow\V2\DtmfParameters $var
     * @return $this
     */
    public function setDtmfParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\DtmfParameters::class);
        $this->dtmf_parameters = $var;

        return $this;
    }

}

