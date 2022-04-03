<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use UnexpectedValueException;

/**
 * Supported features for a location
 *
 * Protobuf type <code>google.cloud.networkconnectivity.v1.LocationFeature</code>
 */
class LocationFeature
{
    /**
     * No publicly supported feature in this location
     *
     * Generated from protobuf enum <code>LOCATION_FEATURE_UNSPECIFIED = 0;</code>
     */
    const LOCATION_FEATURE_UNSPECIFIED = 0;
    /**
     * Site-to-cloud spokes are supported in this location
     *
     * Generated from protobuf enum <code>SITE_TO_CLOUD_SPOKES = 1;</code>
     */
    const SITE_TO_CLOUD_SPOKES = 1;
    /**
     * Site-to-site spokes are supported in this location
     *
     * Generated from protobuf enum <code>SITE_TO_SITE_SPOKES = 2;</code>
     */
    const SITE_TO_SITE_SPOKES = 2;

    private static $valueToName = [
        self::LOCATION_FEATURE_UNSPECIFIED => 'LOCATION_FEATURE_UNSPECIFIED',
        self::SITE_TO_CLOUD_SPOKES => 'SITE_TO_CLOUD_SPOKES',
        self::SITE_TO_SITE_SPOKES => 'SITE_TO_SITE_SPOKES',
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
