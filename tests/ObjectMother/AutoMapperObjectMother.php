<?php

namespace App\Tests\ObjectMother;

use Doctrine\Common\Annotations\AnnotationReader;
use Jane\Component\AutoMapper\AutoMapper;
use Jane\Component\AutoMapper\AutoMapperInterface;
use Jane\Component\AutoMapper\Generator\Generator;
use Jane\Component\AutoMapper\Loader\FileLoader;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;

class AutoMapperObjectMother
{
    public static function default(): AutoMapperInterface
    {
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $loader = new FileLoader(
            new Generator(
                (new ParserFactory())->create(ParserFactory::PREFER_PHP7),
                new ClassDiscriminatorFromClassMetadata($classMetadataFactory)
            ), __DIR__ . '/../__cache__'
        );

        return AutoMapper::create(true, $loader);
    }
}
