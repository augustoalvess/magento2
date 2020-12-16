<?php

namespace Magedin\CourseExample\Api\Data;

interface ExampleInterface
{
    public function getName();
    public function setName($name);
    public function getLastname();
    public function setLastname($lastname);
    public function getRandom();
    public function setRandom($random);
}
