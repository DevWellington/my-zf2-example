<?php

namespace Ribeiro\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{

        $feedService = $this->getServiceLocator()->get('Ribeiro\Services\FeedService');
        $rss = $feedService->getData();

		return new ViewModel(
            [
                'rss' => $rss
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