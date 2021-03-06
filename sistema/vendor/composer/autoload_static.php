<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ecf6a462ea8b482059518ab90d468a3
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/polyfills.php',
        'def43f6c87e4f8dfd0c9e1b1bab14fe8' => __DIR__ . '/..' . '/symfony/polyfill-iconv/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Iconv\\' => 23,
        ),
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Iconv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-iconv',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ecf6a462ea8b482059518ab90d468a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ecf6a462ea8b482059518ab90d468a3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1ecf6a462ea8b482059518ab90d468a3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
