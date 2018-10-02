<?php
namespace Toptal\Blog\Model\ResourceModel\PostData;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Toptal\Blog\Model\PostData', 'Toptal\Blog\Model\ResourceModel\PostData');
    }
}