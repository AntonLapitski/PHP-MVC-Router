<?php

namespace App\Core;

class Request
{
    public static function getRequestedURI()
    {
        return explode('?', getenv('REQUEST_URI'))[0];
    }

    public static function getRequestedURIExploded(string $delimiter = '/')
    {
        return explode($delimiter, self::getRequestedURI());
    }
}