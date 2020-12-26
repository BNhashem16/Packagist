<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit252ed91a2c20e12ec8e05919b93589bc
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hashemy\\Contact\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hashemy\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit252ed91a2c20e12ec8e05919b93589bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit252ed91a2c20e12ec8e05919b93589bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit252ed91a2c20e12ec8e05919b93589bc::$classMap;

        }, null, ClassLoader::class);
    }
}
