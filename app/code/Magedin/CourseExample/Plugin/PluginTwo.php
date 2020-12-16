<?php

namespace Magedin\CourseExample\Plugin;

use MagedIn\CourseExample\Controller\Example\Plugintest;

class PluginTwo
{
    public function beforeExecute(Plugintest $subject)
    {
        echo '<br>Plugin TWO before.';
    }

    public function aroundExecute(Plugintest $subject, \Closure $proceed)
    {
        echo '<br>Plugin TWO around.';
        return $proceed();
    }

    public function afterExecute(Plugintest $subject, $value)
    {
        // $value é o retorno do método original.
        echo '<br>Plugin TWO after.';
        return $value;
    }
}
