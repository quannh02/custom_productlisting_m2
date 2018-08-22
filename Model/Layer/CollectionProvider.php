<?php

namespace Custom\Productlisting\Model\Layer;

class CollectionProvider extends \Magento\Catalog\Model\Layer\Category\ItemCollectionProvider
{
    protected  $collectionProductFactory;

    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productFactory
    )
    {
        $this->collectionProductFactory = $productFactory;
    }

    /**
     * @param \Magento\Catalog\Model\Category $category
     * @return \Magento\Catalog\Model\ResourceModel\Product\Collection
     */
    public function getCollection(\Magento\Catalog\Model\Category $category)
    {
        $collection = $this->collectionProductFactory->create();
        $collection->addAttributeToSelect('*');
        return $collection;
    }
}