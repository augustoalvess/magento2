<?php

namespace Magedin\CourseExample\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.1', '<'))
        {
            $setup->getConnection()->update('magedin_course_example', ['name' => 'Augusto', 'lastname' => 'Alves da Silva'], 'id = 1');
            $setup->getConnection()->insert('magedin_course_example', ['name' => 'Jaqueline', 'lastname' => 'Ely']);
        }

        $setup->endSetup();
    }
}
