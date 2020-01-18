<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92b467046720993d00d8526befc71fa1
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92b467046720993d00d8526befc71fa1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92b467046720993d00d8526befc71fa1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}