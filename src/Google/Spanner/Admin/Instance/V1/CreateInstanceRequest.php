<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [CreateInstance][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstance].
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.CreateInstanceRequest</code>
 */
class CreateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project in which to create the instance. Values
     * are of the form `projects/<project>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Required. The ID of the instance to create.  Valid identifiers are of the
     * form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 6 and 30 characters in
     * length.
     *
     * Generated from protobuf field <code>string instance_id = 2;</code>
     */
    private $instance_id = '';
    /**
     * Required. The instance to create.  The name may be omitted, but if
     * specified must be `<parent>/instances/<instance_id>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance instance = 3;</code>
     */
    private $instance = null;

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct();
    }

    /**
     * Required. The name of the project in which to create the instance. Values
     * are of the form `projects/<project>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the project in which to create the instance. Values
     * are of the form `projects/<project>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;
    }

    /**
     * Required. The ID of the instance to create.  Valid identifiers are of the
     * form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 6 and 30 characters in
     * length.
     *
     * Generated from protobuf field <code>string instance_id = 2;</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * Required. The ID of the instance to create.  Valid identifiers are of the
     * form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 6 and 30 characters in
     * length.
     *
     * Generated from protobuf field <code>string instance_id = 2;</code>
     * @param string $var
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;
    }

    /**
     * Required. The instance to create.  The name may be omitted, but if
     * specified must be `<parent>/instances/<instance_id>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance instance = 3;</code>
     * @return \Google\Spanner\Admin\Instance\V1\Instance
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Required. The instance to create.  The name may be omitted, but if
     * specified must be `<parent>/instances/<instance_id>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance instance = 3;</code>
     * @param \Google\Spanner\Admin\Instance\V1\Instance $var
     */
    public function setInstance(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\Admin\Instance\V1\Instance::class);
        $this->instance = $var;
    }

}

