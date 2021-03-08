<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2dc4f5956bea80800b6b435ffd1179fb
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2dc4f5956bea80800b6b435ffd1179fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2dc4f5956bea80800b6b435ffd1179fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2dc4f5956bea80800b6b435ffd1179fb::$classMap;

        }, null, ClassLoader::class);
    }
}
