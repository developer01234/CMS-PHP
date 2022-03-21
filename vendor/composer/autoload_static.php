<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit690eaf7dc17418f2b87c63c798540ecb
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Engine\\DI\\' => 10,
            'Engine\\' => 7,
        ),
        'C' => 
        array (
            'Cms\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Engine\\DI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine/DI',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
        'Cms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cms',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit690eaf7dc17418f2b87c63c798540ecb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit690eaf7dc17418f2b87c63c798540ecb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit690eaf7dc17418f2b87c63c798540ecb::$classMap;

        }, null, ClassLoader::class);
    }
}
