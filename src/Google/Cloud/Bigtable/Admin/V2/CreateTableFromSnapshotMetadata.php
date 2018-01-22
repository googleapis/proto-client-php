<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This is a private alpha release of Cloud Bigtable snapshots. This feature
 * is not currently available to most Cloud Bigtable customers. This feature
 * might be changed in backward-incompatible ways and is not recommended for
 * production use. It is not subject to any SLA or deprecation policy.
 * The metadata for the Operation returned by CreateTableFromSnapshot.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CreateTableFromSnapshotMetadata</code>
 */
class CreateTableFromSnapshotMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The request that prompted the initiation of this CreateTableFromSnapshot
     * operation.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.CreateTableFromSnapshotRequest original_request = 1;</code>
     */
    private $original_request = null;
    /**
     * The time at which the original request was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp request_time = 2;</code>
     */
    private $request_time = null;
    /**
     * The time at which the operation failed or was completed successfully.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp finish_time = 3;</code>
     */
    private $finish_time = null;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct();
    }

    /**
     * The request that prompted the initiation of this CreateTableFromSnapshot
     * operation.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.CreateTableFromSnapshotRequest original_request = 1;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\CreateTableFromSnapshotRequest
     */
    public function getOriginalRequest()
    {
        return $this->original_request;
    }

    /**
     * The request that prompted the initiation of this CreateTableFromSnapshot
     * operation.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.CreateTableFromSnapshotRequest original_request = 1;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\CreateTableFromSnapshotRequest $var
     * @return $this
     */
    public function setOriginalRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\CreateTableFromSnapshotRequest::class);
        $this->original_request = $var;

        return $this;
    }

    /**
     * The time at which the original request was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp request_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getRequestTime()
    {
        return $this->request_time;
    }

    /**
     * The time at which the original request was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp request_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRequestTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->request_time = $var;

        return $this;
    }

    /**
     * The time at which the operation failed or was completed successfully.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp finish_time = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getFinishTime()
    {
        return $this->finish_time;
    }

    /**
     * The time at which the operation failed or was completed successfully.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp finish_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFinishTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->finish_time = $var;

        return $this;
    }

}

