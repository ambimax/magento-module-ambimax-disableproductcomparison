<?php

class Ambimax_DisableProductComparison_Helper_Product_Compare extends Mage_Catalog_Helper_Product_Compare
{
	const XML_PATH_COMPARE_IS_ENABLED = 'catalog/frontend/enable_product_comparison';
	
    /**
     * Retrieve url for adding product to conpare list
     *
     * @param   Mage_Catalog_Model_Product $product
     * @return  string
     */
    public function getAddUrl($product)
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_COMPARE_IS_ENABLED) ? parent::getAddUrl($product) : null;
    }

}
