<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for verificationStatus EnumType
 * @subpackage Enumerations
 */
class VerificationStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Verified'
     * @return string 'Verified'
     */
    const VALUE_VERIFIED = 'Verified';
    /**
     * Constant for value 'NotVerified'
     * @return string 'NotVerified'
     */
    const VALUE_NOT_VERIFIED = 'NotVerified';
    /**
     * Return allowed values
     * @uses self::VALUE_VERIFIED
     * @uses self::VALUE_NOT_VERIFIED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VERIFIED,
            self::VALUE_NOT_VERIFIED,
        );
    }
}
