<?php

namespace Cloudways\Newmodule\Controller\Test;
 
class Delete extends  \Magento\Framework\App\Action\Action
{
 
    protected $_testReporitory; 
    public function __construct(
        \Magento\Framework\App\Action\Context $context
    ) {
        parent::__construct(
            $context
        );        
    }
 
    public function execute()
    {
        try 
        {
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();    
            $id = $this->getRequest()->getParam('id'); 
            $crudObj = $objectManager->create('Cloudways\Newmodule\Model\Crud'); 
            $crudObj->load($id);
            $crudObj->delete();
        } 
        catch (\Exception $e) 
        {
            $this->messageManager->addException($e, $e->getMessage());
        }
    }
}