<?php

namespace Z38\SwissPayment\Money;

/**
 * Sum of money in pound sterling
 */
class GBP extends Money
{
    /**
     * {@inheritdoc}
     */
    final public function getCurrency()
    {
        return 'GBP';
    }

    /**
     * {@inheritdoc}
     */
    final protected function getDecimals()
    {
        return 2;
    }
}
