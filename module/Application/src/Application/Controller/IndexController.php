<?php

namespace Application\Controller;

use Zend\Mvc\Controller\ActionController;

class IndexController extends ActionController
{
    public function indexAction()
    {
        throw new \Exception('ddd');
        return array('test' => 'Hello, world!');
    }
}
