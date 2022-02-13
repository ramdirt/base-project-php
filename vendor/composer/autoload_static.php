<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5d3613cd50a57575aa1ef44e00c444d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Auth' => __DIR__ . '/../..' . '/app/Controllers/Auth.php',
        'App\\Services\\App' => __DIR__ . '/../..' . '/app/Services/App.php',
        'App\\Services\\Page' => __DIR__ . '/../..' . '/app/Services/Page.php',
        'App\\Services\\Router' => __DIR__ . '/../..' . '/app/Services/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5d3613cd50a57575aa1ef44e00c444d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5d3613cd50a57575aa1ef44e00c444d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd5d3613cd50a57575aa1ef44e00c444d::$classMap;

        }, null, ClassLoader::class);
    }
}
