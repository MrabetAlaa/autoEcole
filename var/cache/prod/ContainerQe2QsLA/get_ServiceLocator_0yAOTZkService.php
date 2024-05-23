<?php

namespace ContainerQe2QsLA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0yAOTZkService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.0yAOTZk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0yAOTZk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.0yAOTZk.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.0yAOTZk": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
            'userRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'user' => 'App\\Entity\\User',
            'userRepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}
