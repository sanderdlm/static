<?php

namespace Static;

class Example
{
    public static function run(): string
    {
        return 'Running in ' . __DIR__ . ' on ' . PHP_VERSION;
    }
}