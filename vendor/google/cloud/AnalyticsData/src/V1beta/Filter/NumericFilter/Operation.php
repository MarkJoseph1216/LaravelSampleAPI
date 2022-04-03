<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto

namespace Google\Analytics\Data\V1beta\Filter\NumericFilter;

use UnexpectedValueException;

/**
 * The operation applied to a numeric filter
 *
 * Protobuf type <code>google.analytics.data.v1beta.Filter.NumericFilter.Operation</code>
 */
class Operation
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>OPERATION_UNSPECIFIED = 0;</code>
     */
    const OPERATION_UNSPECIFIED = 0;
    /**
     * Equal
     *
     * Generated from protobuf enum <code>EQUAL = 1;</code>
     */
    const EQUAL = 1;
    /**
     * Less than
     *
     * Generated from protobuf enum <code>LESS_THAN = 2;</code>
     */
    const LESS_THAN = 2;
    /**
     * Less than or equal
     *
     * Generated from protobuf enum <code>LESS_THAN_OR_EQUAL = 3;</code>
     */
    const LESS_THAN_OR_EQUAL = 3;
    /**
     * Greater than
     *
     * Generated from protobuf enum <code>GREATER_THAN = 4;</code>
     */
    const GREATER_THAN = 4;
    /**
     * Greater than or equal
     *
     * Generated from protobuf enum <code>GREATER_THAN_OR_EQUAL = 5;</code>
     */
    const GREATER_THAN_OR_EQUAL = 5;

    private static $valueToName = [
        self::OPERATION_UNSPECIFIED => 'OPERATION_UNSPECIFIED',
        self::EQUAL => 'EQUAL',
        self::LESS_THAN => 'LESS_THAN',
        self::LESS_THAN_OR_EQUAL => 'LESS_THAN_OR_EQUAL',
        self::GREATER_THAN => 'GREATER_THAN',
        self::GREATER_THAN_OR_EQUAL => 'GREATER_THAN_OR_EQUAL',
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
class_alias(Operation::class, \Google\Analytics\Data\V1beta\Filter_NumericFilter_Operation::class);

