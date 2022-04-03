<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1\RequestOptions;

use UnexpectedValueException;

/**
 * The relative priority for requests. Note that priority is not applicable
 * for [BeginTransaction][google.spanner.v1.Spanner.BeginTransaction].
 * The priority acts as a hint to the Cloud Spanner scheduler and does not
 * guarantee priority or order of execution. For example:
 * * Some parts of a write operation always execute at `PRIORITY_HIGH`,
 *   regardless of the specified priority. This may cause you to see an
 *   increase in high priority workload even when executing a low priority
 *   request. This can also potentially cause a priority inversion where a
 *   lower priority request will be fulfilled ahead of a higher priority
 *   request.
 * * If a transaction contains multiple operations with different priorities,
 *   Cloud Spanner does not guarantee to process the higher priority
 *   operations first. There may be other constraints to satisfy, such as
 *   order of operations.
 *
 * Protobuf type <code>google.spanner.v1.RequestOptions.Priority</code>
 */
class Priority
{
    /**
     * `PRIORITY_UNSPECIFIED` is equivalent to `PRIORITY_HIGH`.
     *
     * Generated from protobuf enum <code>PRIORITY_UNSPECIFIED = 0;</code>
     */
    const PRIORITY_UNSPECIFIED = 0;
    /**
     * This specifies that the request is low priority.
     *
     * Generated from protobuf enum <code>PRIORITY_LOW = 1;</code>
     */
    const PRIORITY_LOW = 1;
    /**
     * This specifies that the request is medium priority.
     *
     * Generated from protobuf enum <code>PRIORITY_MEDIUM = 2;</code>
     */
    const PRIORITY_MEDIUM = 2;
    /**
     * This specifies that the request is high priority.
     *
     * Generated from protobuf enum <code>PRIORITY_HIGH = 3;</code>
     */
    const PRIORITY_HIGH = 3;

    private static $valueToName = [
        self::PRIORITY_UNSPECIFIED => 'PRIORITY_UNSPECIFIED',
        self::PRIORITY_LOW => 'PRIORITY_LOW',
        self::PRIORITY_MEDIUM => 'PRIORITY_MEDIUM',
        self::PRIORITY_HIGH => 'PRIORITY_HIGH',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Priority::class, \Google\Cloud\Spanner\V1\RequestOptions_Priority::class);
