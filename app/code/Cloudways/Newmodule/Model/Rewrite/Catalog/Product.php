<?php
/**
* Catalog Product Rewrite Model
*
* @category Cloudways
* @package Cloudways_NewModule
* @author Thana' Najem
*
*/
namespace Cloudways\NewModule\Model\Rewrite\Catalog;
class Product extends \Magento\Catalog\Model\Product
{
public function __construct()
{
echo "Overrding/ Rewrite Working"; die();
}
}