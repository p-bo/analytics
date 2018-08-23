<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit972ce457dc9159fd7113757f64dd55ad
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Metabase\\' => 9,
        ),
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Metabase\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit972ce457dc9159fd7113757f64dd55ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit972ce457dc9159fd7113757f64dd55ad::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}