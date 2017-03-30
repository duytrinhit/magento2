<?php
/**
 * Copyright © 2017 Balance Internet Pty., Ltd. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Balance\Catalog\Pricing\Render;

class PriceBox extends \Magento\Catalog\Pricing\Render\PriceBox
{
    /**
     * Get Key for caching block content
     *
     * @return string
     */
    public function getCacheKey()
    {
        return parent::getCacheKey() . '-' . $this->getPriceId() . '-' . $this->getPrice()->getPriceCode() . '-' .
        $this->_storeManager->getStore()->getCurrentCurrency()->getCode();
    }
}
