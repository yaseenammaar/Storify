<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/osconfig_service.proto

namespace GPBMetadata\Google\Cloud\Osconfig\V1;

class OsconfigService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchDeployments::initOnce();
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/osconfig/v1/osconfig_service.protogoogle.cloud.osconfig.v1google/api/client.protogoogle/api/resource.proto0google/cloud/osconfig/v1/patch_deployments.proto)google/cloud/osconfig/v1/patch_jobs.protogoogle/protobuf/empty.proto2�
OsConfigService�
ExecutePatchJob0.google.cloud.osconfig.v1.ExecutePatchJobRequest".google.cloud.osconfig.v1.PatchJob"4���.")/v1/{parent=projects/*}/patchJobs:execute:*�
GetPatchJob,.google.cloud.osconfig.v1.GetPatchJobRequest".google.cloud.osconfig.v1.PatchJob"0���#!/v1/{name=projects/*/patchJobs/*}�Aname�
CancelPatchJob/.google.cloud.osconfig.v1.CancelPatchJobRequest".google.cloud.osconfig.v1.PatchJob"3���-"(/v1/{name=projects/*/patchJobs/*}:cancel:*�

ListPatchJobInstanceDetails<.google.cloud.osconfig.v1.ListPatchJobInstanceDetailsRequest=.google.cloud.osconfig.v1.ListPatchJobInstanceDetailsResponse"D���53/v1/{parent=projects/*/patchJobs/*}/instanceDetails�Aparent�
CreatePatchDeployment6.google.cloud.osconfig.v1.CreatePatchDeploymentRequest).google.cloud.osconfig.v1.PatchDeployment"p���<"(/v1/{parent=projects/*}/patchDeployments:patch_deployment�A+parent,patch_deployment,patch_deployment_id�
GetPatchDeployment3.google.cloud.osconfig.v1.GetPatchDeploymentRequest).google.cloud.osconfig.v1.PatchDeployment"7���*(/v1/{name=projects/*/patchDeployments/*}�Aname�
ListPatchDeployments5.google.cloud.osconfig.v1.ListPatchDeploymentsRequest6.google.cloud.osconfig.v1.ListPatchDeploymentsResponse"9���*(/v1/{parent=projects/*}/patchDeployments�Aparent�
DeletePatchDeployment6.google.cloud.osconfig.v1.DeletePatchDeploymentRequest.google.protobuf.Empty"7���**(/v1/{name=projects/*/patchDeployments/*}�AnameK�Aosconfig.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.osconfig.v1B
compute.googleapis.com/Instance4projects/{project}/zones/{zone}/instances/{instance}<projects/{project}/locations/{location}/instances/{instance}bproto3'
        , true);

        static::$is_initialized = true;
    }
}
