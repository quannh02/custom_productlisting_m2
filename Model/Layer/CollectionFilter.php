<?php

namespace Custom\Productlisting\Model\Layer;

class CollectionFilter extends \Magento\Catalog\Model\Layer\Category\CollectionFilter
{
    /**
     * Filter product collection
     *
     * @param \Magento\Catalog\Model\ResourceModel\Product\Collection $collection
     * @param \Magento\Catalog\Model\Category $category
     * @return void
     */
    public function filter(
        $collection,
        \Magento\Catalog\Model\Category $category
    ) {
        $collection
            ->addAttributeToSelect($this->catalogConfig->getProductAttributes())
            ->addMinimalPrice()
            ->addFinalPrice()
            ->addTaxPercents()
            ->setVisibility($this->productVisibility->getVisibleInCatalogIds());
    }
}