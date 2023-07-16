<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1d166d5573358c8ee0abce52f964c9a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pasha\\Mvcproject\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pasha\\Mvcproject\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1d166d5573358c8ee0abce52f964c9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1d166d5573358c8ee0abce52f964c9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1d166d5573358c8ee0abce52f964c9a::$classMap;

        }, null, ClassLoader::class);
    }
}
