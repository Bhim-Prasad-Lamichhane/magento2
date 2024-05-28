<?php
namespace Intuji\Customtab\Block\Product;

use Magento\Catalog\Block\Product\View\AbstractView;
use Magento\Catalog\Model\Product;

class CustomDescription extends AbstractView
{
    /**
     * Retrieve custom description for the product
     *
     * @return string|null
     */
    public function getCustomDescription()
    {
        /** @var Product $product */
        $product = $this->getProduct();

        // Replace 'custom_description' with your custom attribute code
        return $product->getData('customize_description');
    }
}
