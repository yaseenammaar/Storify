<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about a table restore.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.RestoreInfo</code>
 */
class RestoreInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of the restore source.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.RestoreSourceType source_type = 1;</code>
     */
    private $source_type = 0;
    protected $source_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $source_type
     *           The type of the restore source.
     *     @type \Google\Cloud\Bigtable\Admin\V2\BackupInfo $backup_info
     *           Information about the backup used to restore the table. The backup
     *           may no longer exist.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of the restore source.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.RestoreSourceType source_type = 1;</code>
     * @return int
     */
    public function getSourceType()
    {
        return $this->source_type;
    }

    /**
     * The type of the restore source.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.RestoreSourceType source_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\RestoreSourceType::class);
        $this->source_type = $var;

        return $this;
    }

    /**
     * Information about the backup used to restore the table. The backup
     * may no longer exist.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.BackupInfo backup_info = 2;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\BackupInfo|null
     */
    public function getBackupInfo()
    {
        return $this->readOneof(2);
    }

    public function hasBackupInfo()
    {
        return $this->hasOneof(2);
    }

    /**
     * Information about the backup used to restore the table. The backup
     * may no longer exist.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.BackupInfo backup_info = 2;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\BackupInfo $var
     * @return $this
     */
    public function setBackupInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\BackupInfo::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceInfo()
    {
        return $this->whichOneof("source_info");
    }

}

