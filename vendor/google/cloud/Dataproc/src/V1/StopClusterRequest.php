<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to stop a cluster.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.StopClusterRequest</code>
 */
class StopClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the Google Cloud Platform project the
     * cluster belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project_id = '';
    /**
     * Required. The Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';
    /**
     * Required. The cluster name.
     *
     * Generated from protobuf field <code>string cluster_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cluster_name = '';
    /**
     * Optional. Specifying the `cluster_uuid` means the RPC will fail
     * (with error NOT_FOUND) if a cluster with the specified UUID does not exist.
     *
     * Generated from protobuf field <code>string cluster_uuid = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $cluster_uuid = '';
    /**
     * Optional. A unique ID used to identify the request. If the server
     * receives two
     * [StopClusterRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.StopClusterRequest)s
     * with the same id, then the second request will be ignored and the
     * first [google.longrunning.Operation][google.longrunning.Operation] created and stored in the
     * backend is returned.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The ID must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. The ID of the Google Cloud Platform project the
     *           cluster belongs to.
     *     @type string $region
     *           Required. The Dataproc region in which to handle the request.
     *     @type string $cluster_name
     *           Required. The cluster name.
     *     @type string $cluster_uuid
     *           Optional. Specifying the `cluster_uuid` means the RPC will fail
     *           (with error NOT_FOUND) if a cluster with the specified UUID does not exist.
     *     @type string $request_id
     *           Optional. A unique ID used to identify the request. If the server
     *           receives two
     *           [StopClusterRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.StopClusterRequest)s
     *           with the same id, then the second request will be ignored and the
     *           first [google.longrunning.Operation][google.longrunning.Operation] created and stored in the
     *           backend is returned.
     *           Recommendation: Set this value to a
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     *           The ID must contain only letters (a-z, A-Z), numbers (0-9),
     *           underscores (_), and hyphens (-). The maximum length is 40 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the Google Cloud Platform project the
     * cluster belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The ID of the Google Cloud Platform project the
     * cluster belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Required. The Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Required. The cluster name.
     *
     * Generated from protobuf field <code>string cluster_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * Required. The cluster name.
     *
     * Generated from protobuf field <code>string cluster_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

    /**
     * Optional. Specifying the `cluster_uuid` means the RPC will fail
     * (with error NOT_FOUND) if a cluster with the specified UUID does not exist.
     *
     * Generated from protobuf field <code>string cluster_uuid = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getClusterUuid()
    {
        return $this->cluster_uuid;
    }

    /**
     * Optional. Specifying the `cluster_uuid` means the RPC will fail
     * (with error NOT_FOUND) if a cluster with the specified UUID does not exist.
     *
     * Generated from protobuf field <code>string cluster_uuid = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_uuid = $var;

        return $this;
    }

    /**
     * Optional. A unique ID used to identify the request. If the server
     * receives two
     * [StopClusterRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.StopClusterRequest)s
     * with the same id, then the second request will be ignored and the
     * first [google.longrunning.Operation][google.longrunning.Operation] created and stored in the
     * backend is returned.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The ID must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique ID used to identify the request. If the server
     * receives two
     * [StopClusterRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.StopClusterRequest)s
     * with the same id, then the second request will be ignored and the
     * first [google.longrunning.Operation][google.longrunning.Operation] created and stored in the
     * backend is returned.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The ID must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

