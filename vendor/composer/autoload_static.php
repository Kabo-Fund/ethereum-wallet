<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a480b669a83b0409649902dc45167f0
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        '7cfce27594bbc1dd0dbf7e3eb5cd4911' => __DIR__ . '/..' . '/bitwasp/bitcoin/src/Script/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'l' => 
        array (
            'lastguest\\' => 10,
        ),
        'k' => 
        array (
            'kornrunner\\' => 11,
        ),
        'W' => 
        array (
            'Web3p\\RLP\\' => 10,
            'Web3p\\EthereumUtil\\' => 19,
            'Web3p\\EthereumTx\\' => 17,
            'Web3\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'M' => 
        array (
            'Mdanter\\Ecc\\' => 12,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'F' => 
        array (
            'FG\\' => 3,
        ),
        'E' => 
        array (
            'Elliptic\\' => 9,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
        'B' => 
        array (
            'BitWasp\\Buffertools\\' => 20,
            'BitWasp\\Bitcoin\\' => 16,
            'BN\\' => 3,
            'BI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'lastguest\\' => 
        array (
            0 => __DIR__ . '/..' . '/lastguest/murmurhash/src/lastguest',
        ),
        'kornrunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/olegabr/keccak/src',
        ),
        'Web3p\\RLP\\' => 
        array (
            0 => __DIR__ . '/..' . '/olegabr/rlp/src',
        ),
        'Web3p\\EthereumUtil\\' => 
        array (
            0 => __DIR__ . '/..' . '/olegabr/ethereum-util/src',
        ),
        'Web3p\\EthereumTx\\' => 
        array (
            0 => __DIR__ . '/..' . '/olegabr/ethereum-tx/src',
        ),
        'Web3\\' => 
        array (
            0 => __DIR__ . '/..' . '/olegabr/web3.php/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Mdanter\\Ecc\\' => 
        array (
            0 => __DIR__ . '/..' . '/mdanter/ecc/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'FG\\' => 
        array (
            0 => __DIR__ . '/..' . '/fgrosse/phpasn1/lib',
        ),
        'Elliptic\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplito/elliptic-php/lib',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'BitWasp\\Buffertools\\' => 
        array (
            0 => __DIR__ . '/..' . '/bitwasp/buffertools/src/Buffertools',
        ),
        'BitWasp\\Bitcoin\\' => 
        array (
            0 => __DIR__ . '/..' . '/bitwasp/bitcoin/src',
        ),
        'BN\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplito/bn-php/lib',
        ),
        'BI\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplito/bigint-wrapper-php/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pleo' => 
            array (
                0 => __DIR__ . '/..' . '/pleonasm/merkle-tree/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a480b669a83b0409649902dc45167f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a480b669a83b0409649902dc45167f0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1a480b669a83b0409649902dc45167f0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
