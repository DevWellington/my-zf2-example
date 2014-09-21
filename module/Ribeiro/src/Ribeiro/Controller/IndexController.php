<?php

namespace Ribeiro\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		return new ViewModel(
            [
                'nome' => 'Wellington Ribeiro',
                'nomes' =>
                    ['Wellington', 'Ribero', 'Flavia', 'Rocha']
            ]
        );
	}

    public function contactAction()
    {
        return new ViewModel(
            ['nome' => 'Ribeiro']
        );
    }
}