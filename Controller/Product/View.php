<?php

namespace Custom\Productlisting\Controller\Product;

use \Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Framework\View\Result\PageFactory;

class View extends Action
{
    protected $layerResolver;

    protected $resultPageFactory;

    public function __construct(
        Context $context,
        Resolver $resolver,
        PageFactory $pageFactory
    )
    {
        parent::__construct($context);
        $this->layerResolver = $resolver;
        $this->resultPageFactory = $pageFactory;
    }

    /**
     * Blog Index, shows a list of recent blog posts.
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        $this->layerResolver->create('customlayer');
        $returnPage = $this->resultPageFactory->create();
        $returnPage->getConfig()->setPageLayout('2columns-left');
        return $returnPage;
    }
}
