<?php

namespace Cloudways\Newmodule\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Messages;
use Magento\Framework\View\Result\PageFactory; 
class Result extends \Magento\Framework\App\Action\Action
{
    /** @var PageFactory $resultPageFactory */
    protected $resultPageFactory;

    /**
     * Result constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->resultPageFactory = $pageFactory;
        parent::__construct($context);
    }

    /**
     * The controller action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {

        $number = $this->getRequest()->getParam('number');

        $resultPage = $this->resultPageFactory->create(); 
 
        $crudObj = $this->_objectManager->create('Cloudways\Newmodule\Model\Crud');

        // get collection 

        // $coll = $crudObj->getCollection(); 
        $status="";
       // save into table
        $crudObj->setData('number',$number);
       

         if ($crudObj->save()) 
        {

            $status ="success";   

        }
        
        
        else
        {
            
            $status ="fail";   

        }
        $id =  $crudObj->getData('id');
        // print_r($status);
        
       // $this->_view->renderLayout();
       
        //../newmodule/index/edit
        // $resultRedirect = $this->resultRedirectFactory->create(); 
        // $resultRedirect->setPath('newmodule/index/edit',['id' => $number]);  
        // return $resultRedirect;  
       return $this->_redirect('newmodule/index/edit',['id' => $id]);
       // return $resultPage;
    }
}
  