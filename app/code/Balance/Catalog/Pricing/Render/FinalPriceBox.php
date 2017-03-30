<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Balance\Catalog\Pricing\Render;

class FinalPriceBox extends \Magento\Catalog\Pricing\Render\FinalPriceBox
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
