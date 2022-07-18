<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d71529bb62768c8fc8eb5929d28834c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d71529bb62768c8fc8eb5929d28834c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d71529bb62768c8fc8eb5929d28834c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}