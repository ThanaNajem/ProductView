<?php
namespace Cloudways\Newmodule\Block;
class passingDataFromBlockToController extends \Magento\Framework\View\Element\Template
{
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    public function getRegistryVar()
    	{
    		 
             // echo $this->getData('tst'); 
            // Mage::getSingleton('core/session')->setHello('hello');
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $crudObj = $objectManager->create('Cloudways\Newmodule\Controller\Index\tstPassingDataFromControllerToBlock');
           return  $crudObj->registry->registry('test_var');

              
    	}
}