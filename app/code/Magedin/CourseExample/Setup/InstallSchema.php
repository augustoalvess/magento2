<?php

namespace Magedin\CourseExample\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table as DBTable;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable($setup->getTable('magedin_course_example'))
            ->addColumn('id', DBTable::TYPE_SMALLINT, null, ['identity' => true, 'nullable' => false, 'primary' => true], 'ID')
            ->addColumn('name', DBTable::TYPE_TEXT, 256, ['nullable' => true], 'Nome');
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
