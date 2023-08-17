<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\CodeQuality\Rector\ClassMethod\OptionalParametersAfterRequiredRector;
use Rector\Config\RectorConfig;
use Rector\Php74\Rector\ArrayDimFetch\CurlyToSquareBracketArrayStringRector;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
//    $rectorConfig->paths([
//        __DIR__ . '/Build',
//        __DIR__ . '/Classes',
//        __DIR__ . '/Documentation',
//        __DIR__ . '/Tests',
//        __DIR__ . '/unitTests',
//    ]);

    // register a single rule
//    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);

    // define sets of rules
    $rectorConfig->rules([
        CurlyToSquareBracketArrayStringRector::class
    ]);
};
