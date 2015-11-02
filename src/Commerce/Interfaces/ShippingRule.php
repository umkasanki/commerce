<?php

namespace Commerce\Interfaces;

/**
 * Interface ShippingRule
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2015, Pixel & Tonic, Inc.
 * @license   http://craftcommerce.com/license Craft Commerce License Agreement
 * @see       http://craftcommerce.com
 * @package   Commerce\Interfaces
 * @since     1.0
 */
interface ShippingRule
{


    /**
     * Returns the unique handle of this Shipping Method
     *
     * @return string
     */
    public function getHandle();

    /**
     * Is this rule a match on the order?
     *
     * @return bool
     */
    public function matchOrder(\Craft\Commerce_OrderModel $order);

    /**
     * Is this shipping method enabled for listing and selection
     *
     * @return bool
     */
    public function getIsEnabled();

    /**
     * Stores this data as json on the orders shipping adjustment.
     *
     * @return mixed
     */
    public function getOptions();

    /**
     * Returns the percentage rate that is multiplied per line item subtotal.
     *
     * @return float
     */
    public function getPercentageRate();

    /**
     * Returns the flat rate that is multiplied per qty.
     *
     * @return float
     */
    public function getPerItemRate();

    /**
     * Returns the rate that is multiplied by the line item's weight.
     *
     * @return float
     */
    public function getWeightRate();

    /**
     * Returns a base shipping cost. This is added at the order level.
     *
     * @return float
     */
    public function getBaseRate();

    /**
     * Returns a max cost this rule should ever apply.
     * If the total of your rates as applied to the order are greater than this, the baseShippingCost
     * on the order is modified to meet this max rate.
     *
     * @return float
     */
    public function getMaxRate();

    /**
     * Returns a min cost this rule should have applied.
     * If the total of your rates as applied to the order are less than this, the baseShippingCost
     * on the order is modified to meet this min rate.
     *
     * @return float
     */
    public function getMinRate();

}