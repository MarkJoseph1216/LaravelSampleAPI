<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response type for CopyLogEntries long running operations.
 *
 * Generated from protobuf message <code>google.logging.v2.CopyLogEntriesResponse</code>
 */
class CopyLogEntriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of log entries copied.
     *
     * Generated from protobuf field <code>int64 log_entries_copied_count = 1;</code>
     */
    private $log_entries_copied_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $log_entries_copied_count
     *           Number of log entries copied.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of log entries copied.
     *
     * Generated from protobuf field <code>int64 log_entries_copied_count = 1;</code>
     * @return int|string
     */
    public function getLogEntriesCopiedCount()
    {
        return $this->log_entries_copied_count;
    }

    /**
     * Number of log entries copied.
     *
     * Generated from protobuf field <code>int64 log_entries_copied_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLogEntriesCopiedCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->log_entries_copied_count = $var;

        return $this;
    }

}
