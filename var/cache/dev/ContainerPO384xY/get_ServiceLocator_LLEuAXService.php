<?php

namespace ContainerPO384xY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LLEuAXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LLEuAX_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LLEuAX_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'user' => ['privates', '.errored..service_locator.LLEuAX_.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.LLEuAX_": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'em' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
