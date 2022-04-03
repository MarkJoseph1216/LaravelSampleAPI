<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeconnect/v1/connection.proto

namespace Google\Cloud\ApigeeConnect\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [ListConnections][Management.ListConnections].
 *
 * Generated from protobuf message <code>google.cloud.apigeeconnect.v1.ListConnectionsRequest</code>
 */
class ListConnectionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent name of the form:
     *     `projects/{project_number or project_id}/endpoints/{endpoint}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of connections to return. The service may return fewer
     * than this value. If unspecified, at most 100 connections will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * A page token, received from a previous `ListConnections` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListConnections` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent name of the form:
     *               `projects/{project_number or project_id}/endpoints/{endpoint}`.
     *     @type int $page_size
     *           The maximum number of connections to return. The service may return fewer
     *           than this value. If unspecified, at most 100 connections will be returned.
     *           The maximum value is 1000; values above 1000 will be coerced to 1000.
     *     @type string $page_token
     *           A page token, received from a previous `ListConnections` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListConnections` must
     *           match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeconnect\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent name of the form:
     *     `projects/{project_number or project_id}/endpoints/{endpoint}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent name of the form:
     *     `projects/{project_number or project_id}/endpoints/{endpoint}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of connections to return. The service may return fewer
     * than this value. If unspecified, at most 100 connections will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of connections to return. The service may return fewer
     * than this value. If unspecified, at most 100 connections will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous `ListConnections` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListConnections` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous `ListConnections` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListConnections` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

