<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/completion_stats.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class CompletionStats
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/aiplatform/v1/completion_stats.protogoogle.cloud.aiplatform.v1"j
CompletionStats
successful_count (B�A
failed_count (B�A
incomplete_count (B�AB�
com.google.cloud.aiplatform.v1BCompletionStatsProtoPZDgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1;aiplatform�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

