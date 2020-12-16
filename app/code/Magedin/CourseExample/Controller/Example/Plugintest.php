<?php

namespace MagedIn\CourseExample\Controller\Example;

class Plugintest extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $value = '<br>This is the orignal message from the controller.';
        echo $value;
        return $value;
    }
}
