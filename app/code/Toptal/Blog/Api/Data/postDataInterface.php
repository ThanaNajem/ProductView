<?php

namespace Toptal\Blog\Api\Data;

interface PostDataInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const NAME               = 'name'; 
    /**#@-*/


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getName();

 
    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setName($name);
}