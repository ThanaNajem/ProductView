<?php

namespace Toptal\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Toptal\Blog\Api\Data\PostInterface;

/**
 * Class File
 * @package Toptal\Blog\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Post extends AbstractModel implements PostInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const NAME ='name';
    const CACHE_TAG = 'toptal_blog_post';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Toptal\Blog\Model\ResourceModel\PostData');
    }
 
    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }
 
    /**
     * Set Title
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }
 
 }