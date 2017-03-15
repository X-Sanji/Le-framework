<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fda87ecd55a55363249559a9917ffb3
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
        'e320f53bb3364b7ed572ecc5ef33c5cf' => __DIR__ . '/../..' . '/app/helpers.php',
        '3e2e16951008fcc7586f2b52bc1e3e11' => __DIR__ . '/../..' . '/routes/routes.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Predis\\' => 7,
        ),
        'N' => 
        array (
            'NoahBuscher\\Macaw\\' => 18,
        ),
        'M' => 
        array (
            'MongoDB\\' => 8,
            'Medoo\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'bootstrap\\Bootstrap' => __DIR__ . '/../..' . '/bootstrap/bootstrap.php',
        'bootstrap\\Configuration' => __DIR__ . '/../..' . '/bootstrap/configuration.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4fda87ecd55a55363249559a9917ffb3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4fda87ecd55a55363249559a9917ffb3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4fda87ecd55a55363249559a9917ffb3::$classMap;

        }, null, ClassLoader::class);
    }
}
