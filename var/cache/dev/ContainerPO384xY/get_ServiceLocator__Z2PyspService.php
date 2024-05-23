<?php

namespace ContainerPO384xY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Z2PyspService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..Z2Pysp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..Z2Pysp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'passerExamenRepo' => ['privates', 'App\\Repository\\PasserExamenRepository', 'getPasserExamenRepositoryService', true],
        ], [
            'passerExamenRepo' => 'App\\Repository\\PasserExamenRepository',
        ]);
    }
}
