<?php
namespace Cloudways\Newmodule\Block;
class EditModule extends \Magento\Framework\View\Element\Template
{
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    public function getId()
    	{
    		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();  
			$request = $objectManager->get('Magento\Framework\App\Request\Http');  
			$param = $request->getParam('id'); 
            $crudObj = $objectManager->create('Cloudways\Newmodule\Model\Crud'); 
            $messages =$crudObj->getCollection()->addFieldToFilter('id', $param);
            $number = $messages->getFirstItem();
            return $number['number']; 
              
    	}
}