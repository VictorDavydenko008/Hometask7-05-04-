<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf77c532c086854919ca9b8cbbeabcf39
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Prog\\Myproject\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Prog\\Myproject\\' => 
        array (
            0 => __DIR__ . '/../..' . '/MyProject',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf77c532c086854919ca9b8cbbeabcf39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf77c532c086854919ca9b8cbbeabcf39::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf77c532c086854919ca9b8cbbeabcf39::$classMap;

        }, null, ClassLoader::class);
    }
}