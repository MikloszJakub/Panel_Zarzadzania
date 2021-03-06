<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3abd5fcb2463c59b1a4bb73c3f08218
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'X\\Aurora\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'X\\Aurora\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita3abd5fcb2463c59b1a4bb73c3f08218::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3abd5fcb2463c59b1a4bb73c3f08218::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3abd5fcb2463c59b1a4bb73c3f08218::$classMap;

        }, null, ClassLoader::class);
    }
}
