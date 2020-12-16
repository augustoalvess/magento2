<?php

namespace MagedIn\CourseExample\Controller\Example;

use Magedin\CourseExample\Api\Data\ExampleInterface;
use Magento\Framework\App\Action\Context;

class Model extends \Magento\Framework\App\Action\Action
{
    protected $model;

    public function __construct(Context $context, ExampleInterface $model)
    {
        parent::__construct($context);
        $this->model = $model;
    }

    public function execute()
    {
        $this->model->load(1);
        $this->model->setRandom(rand(100, 999));
        $this->model->save();
    }
}
