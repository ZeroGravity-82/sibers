<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab6539fd8f0d928a5b075dc7db750ba5
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Controllers/Controller.php',
        'App\\Controllers\\SearchController' => __DIR__ . '/../..' . '/app/Controllers/SearchController.php',
        'App\\Domain\\Exceptions\\CurlException' => __DIR__ . '/../..' . '/app/Domain/Exceptions/CurlException.php',
        'App\\Domain\\Exceptions\\JsonException' => __DIR__ . '/../..' . '/app/Domain/Exceptions/JsonException.php',
        'App\\Domain\\Exceptions\\XmlException' => __DIR__ . '/../..' . '/app/Domain/Exceptions/XmlException.php',
        'App\\Domain\\SearchEngine\\AbstractSearch' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/AbstractSearch.php',
        'App\\Domain\\SearchEngine\\DdgJsonResponseParser' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/DdgJsonResponseParser.php',
        'App\\Domain\\SearchEngine\\DdgSearch' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/DdgSearch.php',
        'App\\Domain\\SearchEngine\\EngineSearchFactory' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/EngineSearchFactory.php',
        'App\\Domain\\SearchEngine\\GoogleAtomResponseParser' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/GoogleAtomResponseParser.php',
        'App\\Domain\\SearchEngine\\GoogleSearch' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/GoogleSearch.php',
        'App\\Domain\\SearchEngine\\ResponseParserInterface' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/ResponseParserInterface.php',
        'App\\Domain\\SearchEngine\\Result' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/Result.php',
        'App\\Domain\\SearchEngine\\ResultFactory' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/ResultFactory.php',
        'App\\Domain\\SearchEngine\\ResultFactoryInterface' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/ResultFactoryInterface.php',
        'App\\Domain\\SearchEngine\\XmlResponseParser' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/XmlResponseParser.php',
        'App\\Domain\\SearchEngine\\YandexSearch' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/YandexSearch.php',
        'App\\Domain\\SearchEngine\\YandexXmlResponseParser' => __DIR__ . '/../..' . '/app/Domain/SearchEngine/YandexXmlResponseParser.php',
        'App\\Models\\Model' => __DIR__ . '/../..' . '/app/Models/Model.php',
        'Core\\Router\\Router' => __DIR__ . '/../..' . '/core/Router/Router.php',
        'Core\\View\\View' => __DIR__ . '/../..' . '/core/View/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab6539fd8f0d928a5b075dc7db750ba5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab6539fd8f0d928a5b075dc7db750ba5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitab6539fd8f0d928a5b075dc7db750ba5::$classMap;

        }, null, ClassLoader::class);
    }
}
