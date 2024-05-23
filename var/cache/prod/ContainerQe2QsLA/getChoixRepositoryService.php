<?php

namespace ContainerQe2QsLA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChoixRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ChoixRepository' shared autowired service.
     *
     * @return \App\Repository\ChoixRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ChoixRepository'] = new \App\Repository\ChoixRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
