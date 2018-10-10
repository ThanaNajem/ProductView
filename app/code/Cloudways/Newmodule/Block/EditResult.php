<?php
namespace Cloudways\Newmodule\Block;
class EditResult extends \Magento\Framework\View\Element\Template
{
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    public function getId()
    	{
    		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();  
			$request = $objectManager->get('Magento\Framework\App\Request\Http');  
			echo $param = $request->getParam('id');
    	}
}