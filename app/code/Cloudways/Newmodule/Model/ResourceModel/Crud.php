<?php
namespace Cloudways\Newmodule\Model\ResourceModel;
class Crud extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
		public function _construct() {
		$this->_init('number','id');
		}
}