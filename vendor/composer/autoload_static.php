<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1ee88591f9d2709b1d10e7998c2c4dd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phparch\\Fasterweb\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phparch\\Fasterweb\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1ee88591f9d2709b1d10e7998c2c4dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1ee88591f9d2709b1d10e7998c2c4dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1ee88591f9d2709b1d10e7998c2c4dd::$classMap;

        }, null, ClassLoader::class);
    }
}
