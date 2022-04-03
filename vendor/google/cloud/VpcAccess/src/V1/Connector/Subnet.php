<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vpcaccess/v1/vpc_access.proto

namespace Google\Cloud\VpcAccess\V1\Connector;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The subnet in which to house the connector
 *
 * Generated from protobuf message <code>google.cloud.vpcaccess.v1.Connector.Subnet</code>
 */
class Subnet extends \Google\Protobuf\Internal\Message
{
    /**
     * Subnet name (relative, not fully qualified).
     * E.g. if the full subnet selfLink is
     * https://compute.googleapis.com/compute/v1/projects/{project}/regions/{region}/subnetworks/{subnetName}
     * the correct input for this field would be {subnetName}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Project in which the subnet exists.
     * If not set, this project is assumed to be the project for which
     * the connector create request was issued.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     */
    private $project_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Subnet name (relative, not fully qualified).
     *           E.g. if the full subnet selfLink is
     *           https://compute.googleapis.com/compute/v1/projects/{project}/regions/{region}/subnetworks/{subnetName}
     *           the correct input for this field would be {subnetName}
     *     @type string $project_id
     *           Project in which the subnet exists.
     *           If not set, this project is assumed to be the project for which
     *           the connector create request was issued.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vpcaccess\V1\VpcAccess::initOnce();
        parent::__construct($data);
    }

    /**
     * Subnet name (relative, not fully qualified).
     * E.g. if the full subnet selfLink is
     * https://compute.googleapis.com/compute/v1/projects/{project}/regions/{region}/subnetworks/{subnetName}
     * the correct input for this field would be {subnetName}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Subnet name (relative, not fully qualified).
     * E.g. if the full subnet selfLink is
     * https://compute.googleapis.com/compute/v1/projects/{project}/regions/{region}/subnetworks/{subnetName}
     * the correct input for this field would be {subnetName}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Project in which the subnet exists.
     * If not set, this project is assumed to be the project for which
     * the connector create request was issued.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Project in which the subnet exists.
     * If not set, this project is assumed to be the project for which
     * the connector create request was issued.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

}

