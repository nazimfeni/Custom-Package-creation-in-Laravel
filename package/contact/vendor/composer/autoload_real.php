<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb2651943fa628d769d2a2ffd041d3d6b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb2651943fa628d769d2a2ffd041d3d6b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb2651943fa628d769d2a2ffd041d3d6b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb2651943fa628d769d2a2ffd041d3d6b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}