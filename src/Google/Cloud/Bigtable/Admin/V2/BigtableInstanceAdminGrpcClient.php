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
 * Service for creating, configuring, and deleting Cloud Bigtable Instances and
 * Clusters. Provides access to the Instance and Cluster schemas only, not the
 * tables' metadata or data stored in those tables.
 */
class BigtableInstanceAdminGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an instance within a project.
     * @param \Google\Cloud\Bigtable\Admin\V2\CreateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateInstance(\Google\Cloud\Bigtable\Admin\V2\CreateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableInstanceAdmin/CreateInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets information about an instance.
     * @param \Google\Cloud\Bigtable\Admin\V2\GetInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInstance(\Google\Cloud\Bigtable\Admin\V2\GetInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableInstanceAdmin/GetInstance',
        $argument,
        ['\Google\Cloud\Bigtable\Admin\V2\Instance', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists information about instances in a project.
     * @param \Google\Cloud\Bigtable\Admin\V2\ListInstancesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListInstances(\Google\Cloud\Bigtable\Admin\V2\ListInstancesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableInstanceAdmin/ListInstances',
        $argument,
        ['\Google\Cloud\Bigtable\Admin\V2\ListInstancesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an instance within a project.
     * @param \Google\Cloud\Bigtable\Admin\V2\Instance $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateInstance(\Google\Cloud\Bigtable\Admin\V2\Instance $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableInstanceAdmin/UpdateInstance',
        $argument,
        ['\Google\Cloud\Bigtable\Admin\V2\Instance', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an instance from a project.
     * @param \Google\Cloud\Bigtable\Admin\V2\DeleteInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteInstance(\Google\Cloud\Bigtable\Admin\V2\DeleteInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableInstanceAdmin/DeleteInstance',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a cluster within an instance.
     * @param \Google\Cloud\Bigtable\Admin\V2\CreateClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateCluster(\Google\Cloud\Bigtable\Admin\V2\CreateClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableInstanceAdmin/CreateCluster',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets information about a cluster.
     * @param \Google\Cloud\Bigtable\Admin\V2\GetClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCluster(\Google\Cloud\Bigtable\Admin\V2\GetClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableInstanceAdmin/GetCluster',
        $argument,
        ['\Google\Cloud\Bigtable\Admin\V2\Cluster', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists information about clusters in an instance.
     * @param \Google\Cloud\Bigtable\Admin\V2\ListClustersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListClusters(\Google\Cloud\Bigtable\Admin\V2\ListClustersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableInstanceAdmin/ListClusters',
        $argument,
        ['\Google\Cloud\Bigtable\Admin\V2\ListClustersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a cluster within an instance.
     * @param \Google\Cloud\Bigtable\Admin\V2\Cluster $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateCluster(\Google\Cloud\Bigtable\Admin\V2\Cluster $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableInstanceAdmin/UpdateCluster',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a cluster from an instance.
     * @param \Google\Cloud\Bigtable\Admin\V2\DeleteClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteCluster(\Google\Cloud\Bigtable\Admin\V2\DeleteClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableInstanceAdmin/DeleteCluster',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
