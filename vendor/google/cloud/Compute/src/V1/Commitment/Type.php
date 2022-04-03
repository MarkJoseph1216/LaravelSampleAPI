<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Commitment;

use UnexpectedValueException;

/**
 * The type of commitment, which affects the discount rate and the eligible resources. Type MEMORY_OPTIMIZED specifies a commitment that will only apply to memory optimized machines. Type ACCELERATOR_OPTIMIZED specifies a commitment that will only apply to accelerator optimized machines.
 *
 * Protobuf type <code>google.cloud.compute.v1.Commitment.Type</code>
 */
class Type
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_TYPE = 0;</code>
     */
    const UNDEFINED_TYPE = 0;
    /**
     * Generated from protobuf enum <code>ACCELERATOR_OPTIMIZED = 280848403;</code>
     */
    const ACCELERATOR_OPTIMIZED = 280848403;
    /**
     * Generated from protobuf enum <code>COMPUTE_OPTIMIZED = 158349023;</code>
     */
    const COMPUTE_OPTIMIZED = 158349023;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE = 299793543;</code>
     */
    const GENERAL_PURPOSE = 299793543;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE_E2 = 301911877;</code>
     */
    const GENERAL_PURPOSE_E2 = 301911877;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE_N2 = 301912156;</code>
     */
    const GENERAL_PURPOSE_N2 = 301912156;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE_N2D = 232471400;</code>
     */
    const GENERAL_PURPOSE_N2D = 232471400;
    /**
     * Generated from protobuf enum <code>MEMORY_OPTIMIZED = 281753417;</code>
     */
    const MEMORY_OPTIMIZED = 281753417;
    /**
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 437714322;</code>
     */
    const TYPE_UNSPECIFIED = 437714322;

    private static $valueToName = [
        self::UNDEFINED_TYPE => 'UNDEFINED_TYPE',
        self::ACCELERATOR_OPTIMIZED => 'ACCELERATOR_OPTIMIZED',
        self::COMPUTE_OPTIMIZED => 'COMPUTE_OPTIMIZED',
        self::GENERAL_PURPOSE => 'GENERAL_PURPOSE',
        self::GENERAL_PURPOSE_E2 => 'GENERAL_PURPOSE_E2',
        self::GENERAL_PURPOSE_N2 => 'GENERAL_PURPOSE_N2',
        self::GENERAL_PURPOSE_N2D => 'GENERAL_PURPOSE_N2D',
        self::MEMORY_OPTIMIZED => 'MEMORY_OPTIMIZED',
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
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


