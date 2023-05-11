<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2114dcb42bf9047aaa15d0004ba9dd8f
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

        spl_autoload_register(array('ComposerAutoloaderInit2114dcb42bf9047aaa15d0004ba9dd8f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2114dcb42bf9047aaa15d0004ba9dd8f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2114dcb42bf9047aaa15d0004ba9dd8f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
