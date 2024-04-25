<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8de9d469e5303eea97c7058c68d292b0
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyNamespace\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyNamespace\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/MyNamespace',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8de9d469e5303eea97c7058c68d292b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8de9d469e5303eea97c7058c68d292b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8de9d469e5303eea97c7058c68d292b0::$classMap;

        }, null, ClassLoader::class);
    }
}
