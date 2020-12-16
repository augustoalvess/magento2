<?php

namespace Magedin\CourseExample\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table as DBTable;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.1', '<'))
        {
            $this->createLastnameColumn($setup);
        }

        if (version_compare($context->getVersion(), '1.0.2', '<'))
        {
            $this->createRandomColumn($setup);
        }

        $setup->endSetup();
    }

    private function createLastnameColumn(SchemaSetupInterface $setup)
    {
        $setup->getConnection()->addColumn($setup->getTable('magedin_course_example'), 'lastname', ['nullable' => false, 'type' => DBTable::TYPE_TEXT, 'size' => 256, 'comment' => 'Segundo nome']);
    }

    private function createRandomColumn(SchemaSetupInterface $setup)
    {
        $setup->getConnection()->addColumn($setup->getTable('magedin_course_example'), 'random', ['nullable' => true, 'type' => DBTable::TYPE_TEXT, 'size' => 256, 'comment' => 'Randômico']);
    }

}
