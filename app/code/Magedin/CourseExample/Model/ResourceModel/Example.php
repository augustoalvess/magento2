<?php

namespace Magedin\CourseExample\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Example extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('magedin_course_example', 'id');
    }
}
