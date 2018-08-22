<?php

namespace Custom\Productlisting\Model;

class Layer extends \Magento\Catalog\Model\Layer
{
    /**
     * Retrieve current layer product collection
     *
     * @return \Magento\Catalog\Model\ResourceModel\Product\Collection
     */
    public function getProductCollection()
    {
        if (isset($this->_productCollections[1])) {
            $collection = $this->_productCollections[1];
        } else {
            $collection = $this->collectionProvider->getCollection($this->getCurrentCategory());
            $this->prepareProductCollection($collection);
            $this->_productCollections[1] = $collection;
        }

        return $collection;
    }
}
