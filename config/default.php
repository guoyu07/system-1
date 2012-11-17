<?php
/**
 * 
 * Overrides for 'default' config mode.
 * 
 * @var string $system Path to the Aura system root.
 * 
 * @var Aura\Autoload\Loader $loader The autoloader for the system.
 * 
 * @var Aura\Di\Container $di The DI container for the system.
 * 
 */
$di->params['Aura\Router\Map']['attach']['/'] = function () use ($system) {
    return include "$system/package/Aura.Demo/routes.php";
};
