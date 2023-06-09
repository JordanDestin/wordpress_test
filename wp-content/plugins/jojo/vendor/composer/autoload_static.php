<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab1795bd9ef27e34fa01cf77153ccb4c
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jojo\\Test\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jojo\\Test\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitab1795bd9ef27e34fa01cf77153ccb4c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab1795bd9ef27e34fa01cf77153ccb4c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitab1795bd9ef27e34fa01cf77153ccb4c::$classMap;

        }, null, ClassLoader::class);
    }
}
