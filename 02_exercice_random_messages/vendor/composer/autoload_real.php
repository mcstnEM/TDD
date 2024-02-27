<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8bfd9f9845fe273ca003620e5297ed4a
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

        spl_autoload_register(array('ComposerAutoloaderInit8bfd9f9845fe273ca003620e5297ed4a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8bfd9f9845fe273ca003620e5297ed4a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8bfd9f9845fe273ca003620e5297ed4a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
