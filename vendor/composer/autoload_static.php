<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca1d754b1e3a6b61d3b5d5e9c8af614e
{
    public static $files = array (
        '7dd996d98a91d095f100c75e0b9e2391' => __DIR__ . '/..' . '/spatie/async/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
            'Spatie\\Async\\' => 13,
        ),
        'L' => 
        array (
            'Laravel\\SerializableClosure\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Spatie\\Async\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/async/src',
        ),
        'Laravel\\SerializableClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/serializable-closure/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca1d754b1e3a6b61d3b5d5e9c8af614e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca1d754b1e3a6b61d3b5d5e9c8af614e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitca1d754b1e3a6b61d3b5d5e9c8af614e::$classMap;

        }, null, ClassLoader::class);
    }
}
