<?php 
namespace Cloudways\Newmodule\Setup;
 
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Ddl\Table;
 
class InstallSchema implements InstallSchemaInterface {
 
    public function install( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
        $installer = $setup;
 
        $installer->startSetup();
 
        /**
         * Create table 'posts'
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable( 'number' )
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            [ 'identity' => true, 'nullable' => false, 'primary' => true ],
            'ID'
        )->addColumn(
            'number',
            Table::TYPE_INTEGER,
            255,
            [ 'nullable' => false ],
            'number'
        )->setComment(
            'Newmodule number Table'
        );
 
        $installer->getConnection()->createTable( $table );
 
        $installer->endSetup();
    }
}




 