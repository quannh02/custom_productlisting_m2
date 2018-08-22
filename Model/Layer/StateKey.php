<?php

namespace Custom\Productlisting\Model\Layer;

class StateKey extends \Magento\Catalog\Model\Layer\Category\StateKey
{
    /**
     * Build state key
     *
     * @param \Magento\Catalog\Model\Category $category
     * @return string
     */
    public function toString($category)
    {
        // hard code here
        return 'STORE_' . $this->storeManager->getStore()->getId()
            . '_CAT_1'
            . '_CUSTGROUP_' . $this->customerSession->getCustomerGroupId();
    }
}