<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf7192c2bae51fd05440fbbde677c5bc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shuvo\\LaraHelper\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shuvo\\LaraHelper\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf7192c2bae51fd05440fbbde677c5bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf7192c2bae51fd05440fbbde677c5bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf7192c2bae51fd05440fbbde677c5bc::$classMap;

        }, null, ClassLoader::class);
    }
}
