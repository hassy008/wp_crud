<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc16657416dcb65d2d39976346c6e4fea
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc16657416dcb65d2d39976346c6e4fea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc16657416dcb65d2d39976346c6e4fea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}