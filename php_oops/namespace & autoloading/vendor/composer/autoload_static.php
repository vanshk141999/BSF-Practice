<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91c43e976fe5d764f7409402a679f5f1
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpOop\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpOop\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit91c43e976fe5d764f7409402a679f5f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91c43e976fe5d764f7409402a679f5f1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91c43e976fe5d764f7409402a679f5f1::$classMap;

        }, null, ClassLoader::class);
    }
}
