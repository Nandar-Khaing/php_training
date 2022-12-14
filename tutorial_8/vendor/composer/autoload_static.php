<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf50f37b0f960de986f818b0179f69e98
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf50f37b0f960de986f818b0179f69e98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf50f37b0f960de986f818b0179f69e98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf50f37b0f960de986f818b0179f69e98::$classMap;

        }, null, ClassLoader::class);
    }
}
