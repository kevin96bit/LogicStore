<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5492884fa02e4ee0b20f6de505dd7caa
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Gestionale\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Gestionale\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5492884fa02e4ee0b20f6de505dd7caa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5492884fa02e4ee0b20f6de505dd7caa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5492884fa02e4ee0b20f6de505dd7caa::$classMap;

        }, null, ClassLoader::class);
    }
}
