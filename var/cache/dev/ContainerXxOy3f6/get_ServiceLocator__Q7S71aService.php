<?php

namespace ContainerXxOy3f6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Q7S71aService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..q7S71a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..q7S71a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'programme' => ['privates', '.errored..service_locator..q7S71a.App\\Entity\\Programme', NULL, 'Cannot autowire service ".service_locator..q7S71a": it references class "App\\Entity\\Programme" but no such service exists.'],
        ], [
            'programme' => 'App\\Entity\\Programme',
        ]);
    }
}