<?php
namespace Cloudways\Newmodule\Controller\Index;
class GetModelOverridingObject extends \Magento\Framework\App\Action\Action
{
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    /**      * @param \Magento\Framework\App\Action\Context $context      */
    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    /**
     * Blog Index, shows a list of recent blog posts.
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        
        $resultPage = $this->resultPageFactory->create();

        $resultPage->getConfig()->getTitle()->prepend(__('Overriding  page'));
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $crudObj = $objectManager->create('Cloudways\NewModule\Model\Rewrite\Catalog\Product');
        new $crudObj();
        return $resultPage;
        
    }
 
}