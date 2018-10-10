<?php
namespace Cloudways\Newmodule\Controller\Index;
class EditResult extends \Magento\Framework\App\Action\Action
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
         $id = $this->getRequest()->getParam('id');
         $resultPage->getConfig()->getTitle()->prepend(__('Edit Result page')); 
         $post = $this->getRequest()->getPostValue();
         if (isset($post)) {
           

         $objectManager = \Magento\Framework\App\ObjectManager::getInstance();    
         $id = $post['id'];
         $crudObj = $objectManager->create('Cloudways\Newmodule\Model\Crud'); 
         $crudObj->load($id);
         $editedNumber = $post['editnumber'];
         $crudObj->setData( 'number', $editedNumber );  
       if ($crudObj->save()) 
         {
             print_r("success");
         }  
         else
         {
            print_r("fail");
         }
         }
         else
         {
            print_r("back into previous page");
         }

         
        return $resultPage;
        
    }
    
        
       
        // return $resultPage;
    }
