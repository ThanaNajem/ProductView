<?php
namespace Cloudways\Newmodule\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Messages;
use Magento\Framework\View\Result\PageFactory;
class tstPassingDataFromControllerToBlock extends \Magento\Framework\App\Action\Action
{
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    /**      * @param \Magento\Framework\App\Action\Context $context      */
    public function __construct(\Magento\Framework\App\Action\Context $context,PageFactory $pageFactory,
        \Magento\Framework\Registry $registry)
    {
        $this->resultPageFactory = $pageFactory;
        $this->registry = $registry;
        return parent::__construct($context);
    }
    /**
     * Blog Index, shows a list of recent blog posts.
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
      #some code here
         
        $number = $this->getRequest()->getParam('number');

        $resultPage = $this->resultPageFactory->create(); 
        #########
        $this->registry->register('test_var', 'this is a test!');
 
        #some code here
 
        /* end new */
        return $resultPage;
    }
}