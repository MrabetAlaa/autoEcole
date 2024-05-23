<?php

namespace ContainerQe2QsLA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($container, $container->parameters['doctrine.connections'], $container->parameters['doctrine.entity_managers'], 'default', 'default');
    }
}
