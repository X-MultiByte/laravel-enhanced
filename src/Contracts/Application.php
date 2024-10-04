<?php

namespace XMultiByte\Enhanced\Contracts;

interface Application
{
    /**
     * Instance of Application.
     *
     * @param ...$attributes
     *
     * @return \XMultiByte\Enhanced\Contracts\Application
     */
    public static function instance(...$attributes): Application;
    
    /**
     * Application with attributes.
     *
     * @param ...$attributes
     *
     * @return static
     */
    public static function with(...$attributes): Application;
}