<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for running a transfer.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.TransferSpec</code>
 */
class TransferSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Only objects that satisfy these object conditions are included in the set
     * of data source and data sink objects.  Object conditions based on
     * objects' "last modification time" do not exclude objects in a data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.ObjectConditions object_conditions = 5;</code>
     */
    private $object_conditions = null;
    /**
     * If the option
     * [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     * is `true` and time-based object conditions such as 'last modification time'
     * are specified, the request fails with an
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOptions transfer_options = 6;</code>
     */
    private $transfer_options = null;
    protected $data_sink;
    protected $data_source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\StorageTransfer\V1\GcsData $gcs_data_sink
     *           A Cloud Storage data sink.
     *     @type \Google\Cloud\StorageTransfer\V1\GcsData $gcs_data_source
     *           A Cloud Storage data source.
     *     @type \Google\Cloud\StorageTransfer\V1\AwsS3Data $aws_s3_data_source
     *           An AWS S3 data source.
     *     @type \Google\Cloud\StorageTransfer\V1\HttpData $http_data_source
     *           An HTTP URL data source.
     *     @type \Google\Cloud\StorageTransfer\V1\AzureBlobStorageData $azure_blob_storage_data_source
     *           An Azure Blob Storage data source.
     *     @type \Google\Cloud\StorageTransfer\V1\ObjectConditions $object_conditions
     *           Only objects that satisfy these object conditions are included in the set
     *           of data source and data sink objects.  Object conditions based on
     *           objects' "last modification time" do not exclude objects in a data sink.
     *     @type \Google\Cloud\StorageTransfer\V1\TransferOptions $transfer_options
     *           If the option
     *           [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     *           is `true` and time-based object conditions such as 'last modification time'
     *           are specified, the request fails with an
     *           [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * A Cloud Storage data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.GcsData gcs_data_sink = 4;</code>
     * @return \Google\Cloud\StorageTransfer\V1\GcsData|null
     */
    public function getGcsDataSink()
    {
        return $this->readOneof(4);
    }

    public function hasGcsDataSink()
    {
        return $this->hasOneof(4);
    }

    /**
     * A Cloud Storage data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.GcsData gcs_data_sink = 4;</code>
     * @param \Google\Cloud\StorageTransfer\V1\GcsData $var
     * @return $this
     */
    public function setGcsDataSink($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\GcsData::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A Cloud Storage data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.GcsData gcs_data_source = 1;</code>
     * @return \Google\Cloud\StorageTransfer\V1\GcsData|null
     */
    public function getGcsDataSource()
    {
        return $this->readOneof(1);
    }

    public function hasGcsDataSource()
    {
        return $this->hasOneof(1);
    }

    /**
     * A Cloud Storage data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.GcsData gcs_data_source = 1;</code>
     * @param \Google\Cloud\StorageTransfer\V1\GcsData $var
     * @return $this
     */
    public function setGcsDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\GcsData::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * An AWS S3 data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsS3Data aws_s3_data_source = 2;</code>
     * @return \Google\Cloud\StorageTransfer\V1\AwsS3Data|null
     */
    public function getAwsS3DataSource()
    {
        return $this->readOneof(2);
    }

    public function hasAwsS3DataSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * An AWS S3 data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsS3Data aws_s3_data_source = 2;</code>
     * @param \Google\Cloud\StorageTransfer\V1\AwsS3Data $var
     * @return $this
     */
    public function setAwsS3DataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\AwsS3Data::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * An HTTP URL data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.HttpData http_data_source = 3;</code>
     * @return \Google\Cloud\StorageTransfer\V1\HttpData|null
     */
    public function getHttpDataSource()
    {
        return $this->readOneof(3);
    }

    public function hasHttpDataSource()
    {
        return $this->hasOneof(3);
    }

    /**
     * An HTTP URL data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.HttpData http_data_source = 3;</code>
     * @param \Google\Cloud\StorageTransfer\V1\HttpData $var
     * @return $this
     */
    public function setHttpDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\HttpData::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * An Azure Blob Storage data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AzureBlobStorageData azure_blob_storage_data_source = 8;</code>
     * @return \Google\Cloud\StorageTransfer\V1\AzureBlobStorageData|null
     */
    public function getAzureBlobStorageDataSource()
    {
        return $this->readOneof(8);
    }

    public function hasAzureBlobStorageDataSource()
    {
        return $this->hasOneof(8);
    }

    /**
     * An Azure Blob Storage data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AzureBlobStorageData azure_blob_storage_data_source = 8;</code>
     * @param \Google\Cloud\StorageTransfer\V1\AzureBlobStorageData $var
     * @return $this
     */
    public function setAzureBlobStorageDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\AzureBlobStorageData::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Only objects that satisfy these object conditions are included in the set
     * of data source and data sink objects.  Object conditions based on
     * objects' "last modification time" do not exclude objects in a data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.ObjectConditions object_conditions = 5;</code>
     * @return \Google\Cloud\StorageTransfer\V1\ObjectConditions|null
     */
    public function getObjectConditions()
    {
        return $this->object_conditions;
    }

    public function hasObjectConditions()
    {
        return isset($this->object_conditions);
    }

    public function clearObjectConditions()
    {
        unset($this->object_conditions);
    }

    /**
     * Only objects that satisfy these object conditions are included in the set
     * of data source and data sink objects.  Object conditions based on
     * objects' "last modification time" do not exclude objects in a data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.ObjectConditions object_conditions = 5;</code>
     * @param \Google\Cloud\StorageTransfer\V1\ObjectConditions $var
     * @return $this
     */
    public function setObjectConditions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\ObjectConditions::class);
        $this->object_conditions = $var;

        return $this;
    }

    /**
     * If the option
     * [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     * is `true` and time-based object conditions such as 'last modification time'
     * are specified, the request fails with an
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOptions transfer_options = 6;</code>
     * @return \Google\Cloud\StorageTransfer\V1\TransferOptions|null
     */
    public function getTransferOptions()
    {
        return $this->transfer_options;
    }

    public function hasTransferOptions()
    {
        return isset($this->transfer_options);
    }

    public function clearTransferOptions()
    {
        unset($this->transfer_options);
    }

    /**
     * If the option
     * [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     * is `true` and time-based object conditions such as 'last modification time'
     * are specified, the request fails with an
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOptions transfer_options = 6;</code>
     * @param \Google\Cloud\StorageTransfer\V1\TransferOptions $var
     * @return $this
     */
    public function setTransferOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\TransferOptions::class);
        $this->transfer_options = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataSink()
    {
        return $this->whichOneof("data_sink");
    }

    /**
     * @return string
     */
    public function getDataSource()
    {
        return $this->whichOneof("data_source");
    }

}

