<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f3378bcf9ae8c70fa733296c713683a
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f3378bcf9ae8c70fa733296c713683a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f3378bcf9ae8c70fa733296c713683a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f3378bcf9ae8c70fa733296c713683a::$classMap;

        }, null, ClassLoader::class);
    }
}
