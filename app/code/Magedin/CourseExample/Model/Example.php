<?php

namespace Magedin\CourseExample\Model;

use Magedin\CourseExample\Api\Data\ExampleInterface;
use Magento\Framework\Model\AbstractModel;

class Example extends AbstractModel implements ExampleInterface
{
    protected $_eventObject = 'example';
    protected $_eventPrefix = 'magedin_course_example';

    protected function _construct()
    {
        $this->_init(\Magedin\CourseExample\Model\ResourceModel\Example::class);
    }

    public function getName()
    {
        return $this->_getData('name');
    }

    public function setName($name)
    {
        $this->setData('name', $name);
    }

    public function getLastname()
    {
        return $this->_getData('lastname');
    }

    public function setLastname($lastname)
    {
        $this->setData('lastname', $lastname);
    }

    public function getRandom()
    {
        return $this->_getData('random');
    }

    public function setRandom($random)
    {
        $this->setData('random', $random);
    }
}
