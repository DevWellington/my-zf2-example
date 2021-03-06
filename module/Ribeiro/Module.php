<?php

namespace Ribeiro;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return [
            /*'services' => [
                // Alto Acoplamento (new)
                'Ribeiro\Services\FeedService' => new \Ribeiro\Services\FeedService()
            ],*/
            'invokables' => [
                'Ribeiro\Services\FeedService' => 'Ribeiro\Services\FeedService'
            ]
        ];
    }

    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ],
            ],
        ];
    }
}