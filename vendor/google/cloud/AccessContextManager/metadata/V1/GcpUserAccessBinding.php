<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/gcp_user_access_binding.proto

namespace GPBMetadata\Google\Identity\Accesscontextmanager\V1;

class GcpUserAccessBinding
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Egoogle/identity/accesscontextmanager/v1/gcp_user_access_binding.proto\'google.identity.accesscontextmanager.v1google/api/resource.proto"�
GcpUserAccessBinding
name (	B�A
	group_key (	B�A�AN

/accesscontextmanager.googleapis.com/AccessLevel:��A�
8accesscontextmanager.googleapis.com/GcpUserAccessBindingLorganizations/{organization}/gcpUserAccessBindings/{gcp_user_access_binding}B�
+com.google.identity.accesscontextmanager.v1BGcpUserAccessBindingProtoPZ[google.golang.org/genproto/googleapis/identity/accesscontextmanager/v1;accesscontextmanager�GACM�\'Google.Identity.AccessContextManager.V1�\'Google\\Identity\\AccessContextManager\\V1�*Google::Identity::AccessContextManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
