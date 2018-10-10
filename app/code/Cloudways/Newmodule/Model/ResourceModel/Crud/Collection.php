<?php
namespace Cloudways\Newmodule\Model\ResourceModel\Crud;
/**
* Subscription Collection
*/
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
/**
* Initialize resource collection
*
* @return void
*/
public function _construct() {
   $this->_init('Cloudways\Newmodule\Model\Crud','Cloudways\Newmodule\Model\ResourceModel\Crud');
}
}