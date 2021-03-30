<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendMoneyToMarketResultHolder StructType
 * @subpackage Structs
 */
abstract class SendMoneyToMarketResultHolder extends AbstractStructBase
{
    /**
     * The coupon
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $coupon;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * Constructor method for sendMoneyToMarketResultHolder
     * @uses SendMoneyToMarketResultHolder::setCoupon()
     * @uses SendMoneyToMarketResultHolder::setId()
     * @param string $coupon
     * @param string $id
     */
    public function __construct($coupon = null, $id = null)
    {
        $this
            ->setCoupon($coupon)
            ->setId($id);
    }
    /**
     * Get coupon value
     * @return string|null
     */
    public function getCoupon()
    {
        return $this->coupon;
    }
    /**
     * Set coupon value
     * @param string $coupon
     * @return \StructType\SendMoneyToMarketResultHolder
     */
    public function setCoupon($coupon = null)
    {
        // validation for constraint: string
        if (!is_null($coupon) && !is_string($coupon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coupon, true), gettype($coupon)), __LINE__);
        }
        $this->coupon = $coupon;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\SendMoneyToMarketResultHolder
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
}
