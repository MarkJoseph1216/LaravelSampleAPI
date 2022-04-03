<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcesettings/v1/resource_settings.proto

namespace Google\Cloud\ResourceSettings\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response from ListSettings.
 *
 * Generated from protobuf message <code>google.cloud.resourcesettings.v1.ListSettingsResponse</code>
 */
class ListSettingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of settings that are available at the specified Cloud resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcesettings.v1.Setting settings = 1;</code>
     */
    private $settings;
    /**
     * Unused. A page token used to retrieve the next page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ResourceSettings\V1\Setting[]|\Google\Protobuf\Internal\RepeatedField $settings
     *           A list of settings that are available at the specified Cloud resource.
     *     @type string $next_page_token
     *           Unused. A page token used to retrieve the next page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcesettings\V1\ResourceSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of settings that are available at the specified Cloud resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcesettings.v1.Setting settings = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * A list of settings that are available at the specified Cloud resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcesettings.v1.Setting settings = 1;</code>
     * @param \Google\Cloud\ResourceSettings\V1\Setting[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSettings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ResourceSettings\V1\Setting::class);
        $this->settings = $arr;

        return $this;
    }

    /**
     * Unused. A page token used to retrieve the next page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Unused. A page token used to retrieve the next page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

