<?php

namespace ContainerQe2QsLA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YqE9B_3Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.yqE9B.3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yqE9B.3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'userRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'userRepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}
