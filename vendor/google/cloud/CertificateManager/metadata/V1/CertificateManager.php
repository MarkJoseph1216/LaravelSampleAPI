<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace GPBMetadata\Google\Cloud\Certificatemanager\V1;

class CertificateManager
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�p
<google/cloud/certificatemanager/v1/certificate_manager.proto"google.cloud.certificatemanager.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
ListCertificatesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
ListCertificatesResponseE
certificates (2/.google.cloud.certificatemanager.v1.Certificate
next_page_token (	
unreachable (	"\\
GetCertificateRequestC
name (	B5�A�A/
-certificatemanager.googleapis.com/Certificate"�
CreateCertificateRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
certificate_id (	B�AI
certificate (2/.google.cloud.certificatemanager.v1.CertificateB�A"�
UpdateCertificateRequestI
certificate (2/.google.cloud.certificatemanager.v1.CertificateB�A4
update_mask (2.google.protobuf.FieldMaskB�A"_
DeleteCertificateRequestC
name (	B5�A�A/
-certificatemanager.googleapis.com/Certificate"�
ListCertificateMapsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
ListCertificateMapsResponseL
certificate_maps (22.google.cloud.certificatemanager.v1.CertificateMap
next_page_token (	
unreachable (	"b
GetCertificateMapRequestF
name (	B8�A�A2
0certificatemanager.googleapis.com/CertificateMap"�
CreateCertificateMapRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
certificate_map_id (	B�AP
certificate_map (22.google.cloud.certificatemanager.v1.CertificateMapB�A"�
UpdateCertificateMapRequestP
certificate_map (22.google.cloud.certificatemanager.v1.CertificateMapB�A4
update_mask (2.google.protobuf.FieldMaskB�A"e
DeleteCertificateMapRequestF
name (	B8�A�A2
0certificatemanager.googleapis.com/CertificateMap"�
 ListCertificateMapEntriesRequestH
parent (	B8�A�A2
0certificatemanager.googleapis.com/CertificateMap
	page_size (

page_token (	
filter (	
order_by (	"�
!ListCertificateMapEntriesResponseX
certificate_map_entries (27.google.cloud.certificatemanager.v1.CertificateMapEntry
next_page_token (	
unreachable (	"l
GetCertificateMapEntryRequestK
name (	B=�A�A7
5certificatemanager.googleapis.com/CertificateMapEntry"�
 CreateCertificateMapEntryRequestH
parent (	B8�A�A2
0certificatemanager.googleapis.com/CertificateMap%
certificate_map_entry_id (	B�A[
certificate_map_entry (27.google.cloud.certificatemanager.v1.CertificateMapEntryB�A"�
 UpdateCertificateMapEntryRequest[
certificate_map_entry (27.google.cloud.certificatemanager.v1.CertificateMapEntryB�A4
update_mask (2.google.protobuf.FieldMaskB�A"o
 DeleteCertificateMapEntryRequestK
name (	B=�A�A7
5certificatemanager.googleapis.com/CertificateMapEntry"�
ListDnsAuthorizationsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
ListDnsAuthorizationsResponseP
dns_authorizations (24.google.cloud.certificatemanager.v1.DnsAuthorization
next_page_token (	
unreachable (	"f
GetDnsAuthorizationRequestH
name (	B:�A�A4
2certificatemanager.googleapis.com/DnsAuthorization"�
CreateDnsAuthorizationRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location!
dns_authorization_id (	B�AT
dns_authorization (24.google.cloud.certificatemanager.v1.DnsAuthorizationB�A"�
UpdateDnsAuthorizationRequestT
dns_authorization (24.google.cloud.certificatemanager.v1.DnsAuthorizationB�A4
update_mask (2.google.protobuf.FieldMaskB�A"i
DeleteDnsAuthorizationRequestH
name (	B:�A�A4
2certificatemanager.googleapis.com/DnsAuthorization"�
OperationMetadata/
create_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
target (	
verb (	
status_message (	
requested_cancellation (
api_version (	"�
Certificate
name (	
description (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AK
labels (2;.google.cloud.certificatemanager.v1.Certificate.LabelsEntry^
self_managed (2F.google.cloud.certificatemanager.v1.Certificate.SelfManagedCertificateH U
managed (2B.google.cloud.certificatemanager.v1.Certificate.ManagedCertificateH 
san_dnsnames (	B�A
pem_certificate	 (	B�A4
expire_time (2.google.protobuf.TimestampB�AI
scope (25.google.cloud.certificatemanager.v1.Certificate.ScopeB�AT
SelfManagedCertificate
pem_certificate (	B�A
pem_private_key (	B�A�	
ManagedCertificate
domains (	B�AV
dns_authorizations (	B:�A�A4
2certificatemanager.googleapis.com/DnsAuthorization\\
state (2H.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.StateB�Ap
provisioning_issue (2T.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.ProvisioningIssue�
authorization_attempt_info (2[.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfoB�A�
ProvisioningIssuek
reason (2[.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.ProvisioningIssue.Reason
details (	"K
Reason
REASON_UNSPECIFIED 
AUTHORIZATION_ISSUE
RATE_LIMITED�
AuthorizationAttemptInfo
domain (	p
state (2a.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo.State�
failure_reason (2i.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo.FailureReasonB�A
details (	"K
State
STATE_UNSPECIFIED 
AUTHORIZING

AUTHORIZED

FAILED"V
FailureReason
FAILURE_REASON_UNSPECIFIED 

CONFIG
CAA
RATE_LIMITED"H
State
STATE_UNSPECIFIED 
PROVISIONING

FAILED

ACTIVE-
LabelsEntry
key (	
value (	:8"$
Scope
DEFAULT 

EDGE_CACHE:v�As
-certificatemanager.googleapis.com/CertificateBprojects/{project}/locations/{location}/certificates/{certificate}B
type"�
CertificateMap
name (	
description (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AN
labels (2>.google.cloud.certificatemanager.v1.CertificateMap.LabelsEntryX
gclb_targets (2=.google.cloud.certificatemanager.v1.CertificateMap.GclbTargetB�A�

GclbTargetL
target_https_proxy (	B.�A+
)compute.googleapis.com/TargetHttpsProxiesH H
target_ssl_proxy (	B,�A)
\'compute.googleapis.com/TargetSslProxiesH Z

ip_configs (2F.google.cloud.certificatemanager.v1.CertificateMap.GclbTarget.IpConfig-
IpConfig

ip_address (	
ports (B
target_proxy-
LabelsEntry
key (	
value (	:8:��A}
0certificatemanager.googleapis.com/CertificateMapIprojects/{project}/locations/{location}/certificateMaps/{certificate_map}"�
CertificateMapEntry
name (	
description	 (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AS
labels (2C.google.cloud.certificatemanager.v1.CertificateMapEntry.LabelsEntry
hostname (	H R
matcher
 (2?.google.cloud.certificatemanager.v1.CertificateMapEntry.MatcherH H
certificates (	B2�A/
-certificatemanager.googleapis.com/CertificateD
state (20.google.cloud.certificatemanager.v1.ServingStateB�A-
LabelsEntry
key (	
value (	:8"/
Matcher
MATCHER_UNSPECIFIED 
PRIMARY:��A�
5certificatemanager.googleapis.com/CertificateMapEntrywprojects/{project}/locations/{location}/certificateMaps/{certificate_map}/certificateMapEntries/{certificate_map_entry}B
match"�
DnsAuthorization
name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AP
labels (2@.google.cloud.certificatemanager.v1.DnsAuthorization.LabelsEntry
description (	
domain (	B�A�Ah
dns_resource_record
 (2F.google.cloud.certificatemanager.v1.DnsAuthorization.DnsResourceRecordB�AL
DnsResourceRecord
name (	B�A
type (	B�A
data (	B�A-
LabelsEntry
key (	
value (	:8:��A�
2certificatemanager.googleapis.com/DnsAuthorizationMprojects/{project}/locations/{location}/dnsAuthorizations/{dns_authorization}*F
ServingState
SERVING_STATE_UNSPECIFIED 

ACTIVE
PENDING2�(
CertificateManager�
ListCertificates;.google.cloud.certificatemanager.v1.ListCertificatesRequest<.google.cloud.certificatemanager.v1.ListCertificatesResponse"A���20/v1/{parent=projects/*/locations/*}/certificates�Aparent�
GetCertificate9.google.cloud.certificatemanager.v1.GetCertificateRequest/.google.cloud.certificatemanager.v1.Certificate"?���20/v1/{name=projects/*/locations/*/certificates/*}�Aname�
CreateCertificate<.google.cloud.certificatemanager.v1.CreateCertificateRequest.google.longrunning.Operation"����?"0/v1/{parent=projects/*/locations/*}/certificates:certificate�A!parent,certificate,certificate_id�A 
CertificateOperationMetadata�
UpdateCertificate<.google.cloud.certificatemanager.v1.UpdateCertificateRequest.google.longrunning.Operation"����K2</v1/{certificate.name=projects/*/locations/*/certificates/*}:certificate�Acertificate,update_mask�A 
CertificateOperationMetadata�
DeleteCertificate<.google.cloud.certificatemanager.v1.DeleteCertificateRequest.google.longrunning.Operation"l���2*0/v1/{name=projects/*/locations/*/certificates/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListCertificateMaps>.google.cloud.certificatemanager.v1.ListCertificateMapsRequest?.google.cloud.certificatemanager.v1.ListCertificateMapsResponse"D���53/v1/{parent=projects/*/locations/*}/certificateMaps�Aparent�
GetCertificateMap<.google.cloud.certificatemanager.v1.GetCertificateMapRequest2.google.cloud.certificatemanager.v1.CertificateMap"B���53/v1/{name=projects/*/locations/*/certificateMaps/*}�Aname�
CreateCertificateMap?.google.cloud.certificatemanager.v1.CreateCertificateMapRequest.google.longrunning.Operation"����F"3/v1/{parent=projects/*/locations/*}/certificateMaps:certificate_map�A)parent,certificate_map,certificate_map_id�A#
CertificateMapOperationMetadata�
UpdateCertificateMap?.google.cloud.certificatemanager.v1.UpdateCertificateMapRequest.google.longrunning.Operation"����V2C/v1/{certificate_map.name=projects/*/locations/*/certificateMaps/*}:certificate_map�Acertificate_map,update_mask�A#
CertificateMapOperationMetadata�
DeleteCertificateMap?.google.cloud.certificatemanager.v1.DeleteCertificateMapRequest.google.longrunning.Operation"o���5*3/v1/{name=projects/*/locations/*/certificateMaps/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListCertificateMapEntriesD.google.cloud.certificatemanager.v1.ListCertificateMapEntriesRequestE.google.cloud.certificatemanager.v1.ListCertificateMapEntriesResponse"\\���MK/v1/{parent=projects/*/locations/*/certificateMaps/*}/certificateMapEntries�Aparent�
GetCertificateMapEntryA.google.cloud.certificatemanager.v1.GetCertificateMapEntryRequest7.google.cloud.certificatemanager.v1.CertificateMapEntry"Z���MK/v1/{name=projects/*/locations/*/certificateMaps/*/certificateMapEntries/*}�Aname�
CreateCertificateMapEntryD.google.cloud.certificatemanager.v1.CreateCertificateMapEntryRequest.google.longrunning.Operation"����d"K/v1/{parent=projects/*/locations/*/certificateMaps/*}/certificateMapEntries:certificate_map_entry�A5parent,certificate_map_entry,certificate_map_entry_id�A(
CertificateMapEntryOperationMetadata�
UpdateCertificateMapEntryD.google.cloud.certificatemanager.v1.UpdateCertificateMapEntryRequest.google.longrunning.Operation"����z2a/v1/{certificate_map_entry.name=projects/*/locations/*/certificateMaps/*/certificateMapEntries/*}:certificate_map_entry�A!certificate_map_entry,update_mask�A(
CertificateMapEntryOperationMetadata�
DeleteCertificateMapEntryD.google.cloud.certificatemanager.v1.DeleteCertificateMapEntryRequest.google.longrunning.Operation"����M*K/v1/{name=projects/*/locations/*/certificateMaps/*/certificateMapEntries/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListDnsAuthorizations@.google.cloud.certificatemanager.v1.ListDnsAuthorizationsRequestA.google.cloud.certificatemanager.v1.ListDnsAuthorizationsResponse"F���75/v1/{parent=projects/*/locations/*}/dnsAuthorizations�Aparent�
GetDnsAuthorization>.google.cloud.certificatemanager.v1.GetDnsAuthorizationRequest4.google.cloud.certificatemanager.v1.DnsAuthorization"D���75/v1/{name=projects/*/locations/*/dnsAuthorizations/*}�Aname�
CreateDnsAuthorizationA.google.cloud.certificatemanager.v1.CreateDnsAuthorizationRequest.google.longrunning.Operation"����J"5/v1/{parent=projects/*/locations/*}/dnsAuthorizations:dns_authorization�A-parent,dns_authorization,dns_authorization_id�A%
DnsAuthorizationOperationMetadata�
UpdateDnsAuthorizationA.google.cloud.certificatemanager.v1.UpdateDnsAuthorizationRequest.google.longrunning.Operation"����\\2G/v1/{dns_authorization.name=projects/*/locations/*/dnsAuthorizations/*}:dns_authorization�Adns_authorization,update_mask�A%
DnsAuthorizationOperationMetadata�
DeleteDnsAuthorizationA.google.cloud.certificatemanager.v1.DeleteDnsAuthorizationRequest.google.longrunning.Operation"q���7*5/v1/{name=projects/*/locations/*/dnsAuthorizations/*}�Aname�A*
google.protobuf.EmptyOperationMetadataU�A!certificatemanager.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
&com.google.cloud.certificatemanager.v1BCertificateManagerProtoPZTgoogle.golang.org/genproto/googleapis/cloud/certificatemanager/v1;certificatemanager�"Google.Cloud.CertificateManager.V1�"Google\\Cloud\\CertificateManager\\V1�%Google::Cloud::CertificateManager::V1�Az
)compute.googleapis.com/TargetHttpsProxiesMprojects/{project}/locations/{location}/targetHttpsProxies/{targetHttpsProxy}�At
\'compute.googleapis.com/TargetSslProxiesIprojects/{project}/locations/{location}/targetSslProxies/{targetSslProxy}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

