<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/autoscaling_policies.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for the size bounds of an instance group, including its
 * proportional size to other groups.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.InstanceGroupAutoscalingPolicyConfig</code>
 */
class InstanceGroupAutoscalingPolicyConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Minimum number of instances for this group.
     * Primary workers - Bounds: [2, max_instances]. Default: 2.
     * Secondary workers - Bounds: [0, max_instances]. Default: 0.
     *
     * Generated from protobuf field <code>int32 min_instances = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $min_instances = 0;
    /**
     * Optional. Maximum number of instances for this group. Required for primary
     * workers. Note that by default, clusters will not use secondary workers.
     * Required for secondary workers if the minimum secondary instances is set.
     * Primary workers - Bounds: [min_instances, ). Required.
     * Secondary workers - Bounds: [min_instances, ). Default: 0.
     *
     * Generated from protobuf field <code>int32 max_instances = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $max_instances = 0;
    /**
     * Optional. Weight for the instance group, which is used to determine the
     * fraction of total workers in the cluster from this instance group.
     * For example, if primary workers have weight 2, and secondary workers have
     * weight 1, the cluster will have approximately 2 primary workers for each
     * secondary worker.
     * The cluster may not reach the specified balance if constrained
     * by min/max bounds or other autoscaling settings. For example, if
     * `max_instances` for secondary workers is 0, then only primary workers will
     * be added. The cluster can also be out of balance when created.
     * If weight is not set on any instance group, the cluster will default to
     * equal weight for all groups: the cluster will attempt to maintain an equal
     * number of workers in each group within the configured size bounds for each
     * group. If weight is set for one group only, the cluster will default to
     * zero weight on the unset group. For example if weight is set only on
     * primary workers, the cluster will use primary workers only and no
     * secondary workers.
     *
     * Generated from protobuf field <code>int32 weight = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $weight = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_instances
     *           Optional. Minimum number of instances for this group.
     *           Primary workers - Bounds: [2, max_instances]. Default: 2.
     *           Secondary workers - Bounds: [0, max_instances]. Default: 0.
     *     @type int $max_instances
     *           Optional. Maximum number of instances for this group. Required for primary
     *           workers. Note that by default, clusters will not use secondary workers.
     *           Required for secondary workers if the minimum secondary instances is set.
     *           Primary workers - Bounds: [min_instances, ). Required.
     *           Secondary workers - Bounds: [min_instances, ). Default: 0.
     *     @type int $weight
     *           Optional. Weight for the instance group, which is used to determine the
     *           fraction of total workers in the cluster from this instance group.
     *           For example, if primary workers have weight 2, and secondary workers have
     *           weight 1, the cluster will have approximately 2 primary workers for each
     *           secondary worker.
     *           The cluster may not reach the specified balance if constrained
     *           by min/max bounds or other autoscaling settings. For example, if
     *           `max_instances` for secondary workers is 0, then only primary workers will
     *           be added. The cluster can also be out of balance when created.
     *           If weight is not set on any instance group, the cluster will default to
     *           equal weight for all groups: the cluster will attempt to maintain an equal
     *           number of workers in each group within the configured size bounds for each
     *           group. If weight is set for one group only, the cluster will default to
     *           zero weight on the unset group. For example if weight is set only on
     *           primary workers, the cluster will use primary workers only and no
     *           secondary workers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\AutoscalingPolicies::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Minimum number of instances for this group.
     * Primary workers - Bounds: [2, max_instances]. Default: 2.
     * Secondary workers - Bounds: [0, max_instances]. Default: 0.
     *
     * Generated from protobuf field <code>int32 min_instances = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMinInstances()
    {
        return $this->min_instances;
    }

    /**
     * Optional. Minimum number of instances for this group.
     * Primary workers - Bounds: [2, max_instances]. Default: 2.
     * Secondary workers - Bounds: [0, max_instances]. Default: 0.
     *
     * Generated from protobuf field <code>int32 min_instances = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMinInstances($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_instances = $var;

        return $this;
    }

    /**
     * Optional. Maximum number of instances for this group. Required for primary
     * workers. Note that by default, clusters will not use secondary workers.
     * Required for secondary workers if the minimum secondary instances is set.
     * Primary workers - Bounds: [min_instances, ). Required.
     * Secondary workers - Bounds: [min_instances, ). Default: 0.
     *
     * Generated from protobuf field <code>int32 max_instances = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMaxInstances()
    {
        return $this->max_instances;
    }

    /**
     * Optional. Maximum number of instances for this group. Required for primary
     * workers. Note that by default, clusters will not use secondary workers.
     * Required for secondary workers if the minimum secondary instances is set.
     * Primary workers - Bounds: [min_instances, ). Required.
     * Secondary workers - Bounds: [min_instances, ). Default: 0.
     *
     * Generated from protobuf field <code>int32 max_instances = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxInstances($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_instances = $var;

        return $this;
    }

    /**
     * Optional. Weight for the instance group, which is used to determine the
     * fraction of total workers in the cluster from this instance group.
     * For example, if primary workers have weight 2, and secondary workers have
     * weight 1, the cluster will have approximately 2 primary workers for each
     * secondary worker.
     * The cluster may not reach the specified balance if constrained
     * by min/max bounds or other autoscaling settings. For example, if
     * `max_instances` for secondary workers is 0, then only primary workers will
     * be added. The cluster can also be out of balance when created.
     * If weight is not set on any instance group, the cluster will default to
     * equal weight for all groups: the cluster will attempt to maintain an equal
     * number of workers in each group within the configured size bounds for each
     * group. If weight is set for one group only, the cluster will default to
     * zero weight on the unset group. For example if weight is set only on
     * primary workers, the cluster will use primary workers only and no
     * secondary workers.
     *
     * Generated from protobuf field <code>int32 weight = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Optional. Weight for the instance group, which is used to determine the
     * fraction of total workers in the cluster from this instance group.
     * For example, if primary workers have weight 2, and secondary workers have
     * weight 1, the cluster will have approximately 2 primary workers for each
     * secondary worker.
     * The cluster may not reach the specified balance if constrained
     * by min/max bounds or other autoscaling settings. For example, if
     * `max_instances` for secondary workers is 0, then only primary workers will
     * be added. The cluster can also be out of balance when created.
     * If weight is not set on any instance group, the cluster will default to
     * equal weight for all groups: the cluster will attempt to maintain an equal
     * number of workers in each group within the configured size bounds for each
     * group. If weight is set for one group only, the cluster will default to
     * zero weight on the unset group. For example if weight is set only on
     * primary workers, the cluster will use primary workers only and no
     * secondary workers.
     *
     * Generated from protobuf field <code>int32 weight = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->weight = $var;

        return $this;
    }

}

