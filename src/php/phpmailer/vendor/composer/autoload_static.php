<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81bb7e83ae0ddef80b5a924cfb489d16
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit81bb7e83ae0ddef80b5a924cfb489d16::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit81bb7e83ae0ddef80b5a924cfb489d16::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit81bb7e83ae0ddef80b5a924cfb489d16::$classMap;

        }, null, ClassLoader::class);
    }
}
