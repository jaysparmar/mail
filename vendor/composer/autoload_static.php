<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit622b6879bad1643269b52c95f149c24b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit622b6879bad1643269b52c95f149c24b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit622b6879bad1643269b52c95f149c24b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit622b6879bad1643269b52c95f149c24b::$classMap;

        }, null, ClassLoader::class);
    }
}
