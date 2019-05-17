<?php

namespace Bavix\Wallet\Interfaces;

interface Cart
{

    /**
     * @param Customer $customer
     * @param bool $force
     *
     * @return bool
     */
    public function canBuy(Customer $customer, bool $force = null): bool;

    /**
     * @return int
     */
    public function getAmountProduct(): int;

    /**
     * @return array
     */
    public function getMetaProduct(): ?array;

}