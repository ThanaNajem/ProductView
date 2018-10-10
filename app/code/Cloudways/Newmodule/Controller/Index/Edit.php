<?php
namespace Cloudways\Newmodule\Controller\Index;
class Edit extends \Magento\Framework\App\Action\Action
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

        $resultPage->getConfig()->getTitle()->prepend(__('Edit  page'));
    var_dump($this->getRequest()->getParam('id'));
    $id = $this->getRequest()->getParam('id');
     // return $this->_redirect('newmodule/index/edit',['id' => $id]);
        return $resultPage;
        
    }
 
}