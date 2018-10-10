<?php

/**
 * Class InstallData
 *
 * @package Cloudways\Newmodule\Setup
 */
namespace Cloudways\Newmodule\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
/**
 * Class InstallData
 * @package Cloudways\Newmodule\Setup
 */
class InstallData implements InstallDataInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        /** Add root category */
        $sampleTemplates = [
            'number' => '1'
          
        ];
        $setup->getConnection()->insert($setup->getTable('number'), $sampleTemplates);
        $installer->endSetup();
    }
}