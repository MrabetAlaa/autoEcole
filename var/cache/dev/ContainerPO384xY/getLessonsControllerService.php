<?php

namespace ContainerPO384xY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLessonsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LessonsController' shared autowired service.
     *
     * @return \App\Controller\LessonsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LessonsController.php';

        $container->services['App\\Controller\\LessonsController'] = $instance = new \App\Controller\LessonsController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\LessonsController', $container));

        return $instance;
    }
}
