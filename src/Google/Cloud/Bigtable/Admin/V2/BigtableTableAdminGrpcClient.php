<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2017 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Cloud\Bigtable\Admin\V2;

/**
 * Service for creating, configuring, and deleting Cloud Bigtable tables.
 *
 *
 * Provides access to the table schemas only, not the data stored within
 * the tables.
 */
class BigtableTableAdminGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a new table in the specified instance.
     * The table can be created with a full set of initial column families,
     * specified in the request.
     * @param \Google\Cloud\Bigtable\Admin\V2\CreateTableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateTable(\Google\Cloud\Bigtable\Admin\V2\CreateTableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/CreateTable',
        $argument,
        ['\Google\Cloud\Bigtable\Admin\V2\Table', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all tables served from a specified instance.
     * @param \Google\Cloud\Bigtable\Admin\V2\ListTablesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListTables(\Google\Cloud\Bigtable\Admin\V2\ListTablesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/ListTables',
        $argument,
        ['\Google\Cloud\Bigtable\Admin\V2\ListTablesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets metadata information about the specified table.
     * @param \Google\Cloud\Bigtable\Admin\V2\GetTableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTable(\Google\Cloud\Bigtable\Admin\V2\GetTableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/GetTable',
        $argument,
        ['\Google\Cloud\Bigtable\Admin\V2\Table', 'decode'],
        $metadata, $options);
    }

    /**
     * Permanently deletes a specified table and all of its data.
     * @param \Google\Cloud\Bigtable\Admin\V2\DeleteTableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteTable(\Google\Cloud\Bigtable\Admin\V2\DeleteTableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/DeleteTable',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Performs a series of column family modifications on the specified table.
     * Either all or none of the modifications will occur before this method
     * returns, but data requests received prior to that point may see a table
     * where only some modifications have taken effect.
     * @param \Google\Cloud\Bigtable\Admin\V2\ModifyColumnFamiliesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ModifyColumnFamilies(\Google\Cloud\Bigtable\Admin\V2\ModifyColumnFamiliesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/ModifyColumnFamilies',
        $argument,
        ['\Google\Cloud\Bigtable\Admin\V2\Table', 'decode'],
        $metadata, $options);
    }

    /**
     * Permanently drop/delete a row range from a specified table. The request can
     * specify whether to delete all rows in a table, or only those that match a
     * particular prefix.
     * @param \Google\Cloud\Bigtable\Admin\V2\DropRowRangeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DropRowRange(\Google\Cloud\Bigtable\Admin\V2\DropRowRangeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/DropRowRange',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
