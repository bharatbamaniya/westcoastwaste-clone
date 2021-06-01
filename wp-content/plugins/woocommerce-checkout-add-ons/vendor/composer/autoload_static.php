<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53238e19ed884adab8cc0d2f56e0b2b1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SkyVerge\\WooCommerce\\Checkout_Add_Ons\\' => 38,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SkyVerge\\WooCommerce\\Checkout_Add_Ons\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53238e19ed884adab8cc0d2f56e0b2b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53238e19ed884adab8cc0d2f56e0b2b1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
