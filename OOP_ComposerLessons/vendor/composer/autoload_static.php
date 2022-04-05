<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita580d9590d33159a91396d33402cd8e9
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lesson25\\' => 9,
            'Lesson24\\' => 9,
            'Lesson23\\' => 9,
            'Lesson22\\' => 9,
            'Lesson21\\' => 9,
            'Lesson20\\' => 9,
            'Lesson19\\' => 9,
            'Lesson18\\' => 9,
            'Lesson17\\' => 9,
            'Lesson16\\' => 9,
            'Lesson15\\' => 9,
            'Lesson14\\' => 9,
            'Lesson13\\' => 9,
            'Lesson12\\' => 9,
            'Lesson11\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lesson25\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson25/src',
        'Lesson24\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson24/src',
        ),
        'Lesson23\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson23/src',
        ),
        'Lesson22\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson22/src',
        ),
        'Lesson21\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson21/src',
        ),
        'Lesson20\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson20/src',
        ),
        'Lesson19\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson19/src',
        ),
        'Lesson18\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson18/src',
        ),
        'Lesson17\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson17/src',
        ),
        'Lesson16\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson16/src',
        ),
        'Lesson15\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson15/src',
        ),
        'Lesson14\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson14/src',
        ),
        'Lesson13\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson13/src',
        ),
        'Lesson12\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson12/src',
        ),
        'Lesson11\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lesson11/src',
        ),
    );

    public static $classMap = array (
        'Lesson11\\Student' => __DIR__ . '/../..' . '/Lesson11/src/Student.php',
        'Lesson12\\Arr' => __DIR__ . '/../..' . '/Lesson12/src/Arr.php',
        'Lesson13\\City' => __DIR__ . '/../..' . '/Lesson13/src/City.php',
        'Lesson13\\User' => __DIR__ . '/../..' . '/Lesson13/src/User.php',
        'Lesson14\\User' => __DIR__ . '/../..' . '/Lesson14/src/User.php',
        'Lesson15\\Arr' => __DIR__ . '/../..' . '/Lesson15/src/Arr.php',
        'Lesson16\\Arr' => __DIR__ . '/../..' . '/Lesson16/src/Arr.php',
        'Lesson17\\ArrayAvgHelper' => __DIR__ . '/../..' . '/Lesson17/src/ArrayAvgHelper.php',
        'Lesson18\\Driver' => __DIR__ . '/../..' . '/Lesson18/src/Driver.php',
        'Lesson18\\Employee' => __DIR__ . '/../..' . '/Lesson18/src/Employee.php',
        'Lesson18\\Programmer' => __DIR__ . '/../..' . '/Lesson18/src/Programmer.php',
        'Lesson18\\Student' => __DIR__ . '/../..' . '/Lesson18/src/Student.php',
        'Lesson18\\User' => __DIR__ . '/../..' . '/Lesson18/src/User.php',
        'Lesson19\\Student' => __DIR__ . '/../..' . '/Lesson19/src/Student.php',
        'Lesson19\\User' => __DIR__ . '/../..' . '/Lesson19/src/User.php',
        'Lesson20\\Student' => __DIR__ . '/../..' . '/Lesson20/src/Student.php',
        'Lesson20\\User' => __DIR__ . '/../..' . '/Lesson20/src/User.php',
        'Lesson21\\Employee' => __DIR__ . '/../..' . '/Lesson21/src/Employee.php',
        'Lesson21\\Student' => __DIR__ . '/../..' . '/Lesson21/src/Student.php',
        'Lesson21\\User' => __DIR__ . '/../..' . '/Lesson21/src/User.php',
        'Lesson22\\Product' => __DIR__ . '/../..' . '/Lesson22/src/Product.php',
        'Lesson23\\Arr' => __DIR__ . '/../..' . '/Lesson23/src/Arr.php',
        'Lesson23\\AvgHelper' => __DIR__ . '/../..' . '/Lesson23/src/AvgHelper.php',
        'Lesson23\\SumHelper' => __DIR__ . '/../..' . '/Lesson23/src/SumHelper.php',
        'Lesson24\\Disk' => __DIR__ . '/../..' . '/Lesson24/src/Disk.php',
        'Lesson24\\Figure' => __DIR__ . '/../..' . '/Lesson24/src/Figure.php',
        'Lesson25\\Disk' => __DIR__ . '/../..' . '/Lesson25/src/Disk.php',
        'Lesson25\\Figure' => __DIR__ . '/../..' . '/Lesson25/src/Figure.php',
        'Lesson25\\FiguresCollection' => __DIR__ . '/../..' . '/Lesson25/src/FiguresCollection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita580d9590d33159a91396d33402cd8e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita580d9590d33159a91396d33402cd8e9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita580d9590d33159a91396d33402cd8e9::$classMap;

        }, null, ClassLoader::class);
    }
}
