<?php

namespace Magedin\CourseExample\Plugin;

use MagedIn\CourseExample\Controller\Example\Plugintest;

class PluginOne
{
    public function beforeExecute(Plugintest $subject)
    {
        echo '<br>Plugin ONE before.';
    }

    public function aroundExecute(Plugintest $subject, \Closure $proceed)
    {
        echo '<br>Plugin ONE around.';
        return $proceed();
    }

    public function afterExecute(Plugintest $subject, $value)
    {
        // $value é o retorno do método original.
        echo $value;
        echo '<br>Plugin ONE after.';
    }
}
