<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit62de3c581453d2d7faf249e82180c4db
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

        spl_autoload_register(array('ComposerAutoloaderInit62de3c581453d2d7faf249e82180c4db', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit62de3c581453d2d7faf249e82180c4db', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit62de3c581453d2d7faf249e82180c4db::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
