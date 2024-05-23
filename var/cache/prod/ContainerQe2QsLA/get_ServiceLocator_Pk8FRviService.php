<?php

namespace ContainerQe2QsLA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Pk8FRviService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Pk8FRvi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Pk8FRvi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'passerExamenRepo' => ['privates', 'App\\Repository\\PasserExamenRepository', 'getPasserExamenRepositoryService', true],
        ], [
            'em' => '?',
            'passerExamenRepo' => 'App\\Repository\\PasserExamenRepository',
        ]);
    }
}
