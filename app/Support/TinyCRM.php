<?php

namespace Support;

use Illuminate\Foundation\Application as LaravelApplication;

class TinyCRM extends LaravelApplication
{
    protected $namespace = 'App\\';

    public function path($path = '')
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'app/App' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}
