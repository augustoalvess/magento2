<?php

namespace Magedin\CourseExample\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class RecurringData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->update('magedin_course_example', ['random' => rand(100, 999)], 'name = "Augusto"');

        $setup->endSetup();
    }
}
