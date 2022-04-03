<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/upgrade.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Upgrade Distribution represents metadata about the Upgrade for each
 * operating system (CPE). Some distributions have additional metadata around
 * updates, classifying them into various categories and severities.
 *
 * Generated from protobuf message <code>grafeas.v1.UpgradeDistribution</code>
 */
class UpgradeDistribution extends \Google\Protobuf\Internal\Message
{
    /**
     * Required - The specific operating system this metadata applies to. See
     * https://cpe.mitre.org/specification/.
     *
     * Generated from protobuf field <code>string cpe_uri = 1;</code>
     */
    private $cpe_uri = '';
    /**
     * The operating system classification of this Upgrade, as specified by the
     * upstream operating system upgrade feed. For Windows the classification is
     * one of the category_ids listed at
     * https://docs.microsoft.com/en-us/previous-versions/windows/desktop/ff357803(v=vs.85)
     *
     * Generated from protobuf field <code>string classification = 2;</code>
     */
    private $classification = '';
    /**
     * The severity as specified by the upstream operating system.
     *
     * Generated from protobuf field <code>string severity = 3;</code>
     */
    private $severity = '';
    /**
     * The cve tied to this Upgrade.
     *
     * Generated from protobuf field <code>repeated string cve = 4;</code>
     */
    private $cve;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cpe_uri
     *           Required - The specific operating system this metadata applies to. See
     *           https://cpe.mitre.org/specification/.
     *     @type string $classification
     *           The operating system classification of this Upgrade, as specified by the
     *           upstream operating system upgrade feed. For Windows the classification is
     *           one of the category_ids listed at
     *           https://docs.microsoft.com/en-us/previous-versions/windows/desktop/ff357803(v=vs.85)
     *     @type string $severity
     *           The severity as specified by the upstream operating system.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $cve
     *           The cve tied to this Upgrade.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Upgrade::initOnce();
        parent::__construct($data);
    }

    /**
     * Required - The specific operating system this metadata applies to. See
     * https://cpe.mitre.org/specification/.
     *
     * Generated from protobuf field <code>string cpe_uri = 1;</code>
     * @return string
     */
    public function getCpeUri()
    {
        return $this->cpe_uri;
    }

    /**
     * Required - The specific operating system this metadata applies to. See
     * https://cpe.mitre.org/specification/.
     *
     * Generated from protobuf field <code>string cpe_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCpeUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpe_uri = $var;

        return $this;
    }

    /**
     * The operating system classification of this Upgrade, as specified by the
     * upstream operating system upgrade feed. For Windows the classification is
     * one of the category_ids listed at
     * https://docs.microsoft.com/en-us/previous-versions/windows/desktop/ff357803(v=vs.85)
     *
     * Generated from protobuf field <code>string classification = 2;</code>
     * @return string
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * The operating system classification of this Upgrade, as specified by the
     * upstream operating system upgrade feed. For Windows the classification is
     * one of the category_ids listed at
     * https://docs.microsoft.com/en-us/previous-versions/windows/desktop/ff357803(v=vs.85)
     *
     * Generated from protobuf field <code>string classification = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClassification($var)
    {
        GPBUtil::checkString($var, True);
        $this->classification = $var;

        return $this;
    }

    /**
     * The severity as specified by the upstream operating system.
     *
     * Generated from protobuf field <code>string severity = 3;</code>
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * The severity as specified by the upstream operating system.
     *
     * Generated from protobuf field <code>string severity = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSeverity($var)
    {
        GPBUtil::checkString($var, True);
        $this->severity = $var;

        return $this;
    }

    /**
     * The cve tied to this Upgrade.
     *
     * Generated from protobuf field <code>repeated string cve = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCve()
    {
        return $this->cve;
    }

    /**
     * The cve tied to this Upgrade.
     *
     * Generated from protobuf field <code>repeated string cve = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCve($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->cve = $arr;

        return $this;
    }

}

