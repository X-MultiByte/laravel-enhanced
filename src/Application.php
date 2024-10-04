<?php

namespace XMultibyte\Enhanced;

use XMultiByte\Enhanced\Concerns\HasAttributes;
use XMultiByte\Enhanced\Contracts\Application as ApplicationContract;

abstract class Application implements ApplicationContract
{
    use HasAttributes;
    
    public const BASE_PATH = __DIR__;
    
    /**
     * @var \XMultibyte\Enhanced\Application
     */
    protected static $instance = null;
    
    /**
     * Constructor
     *
     * @param ...$attributes
     */
    public function __construct(...$attributes)
    {
        $this->setAttributes($attributes);
        
        $this->initialize();
    }
    
    /**
     * Initialize.
     *
     * @param  array  $options
     *
     * @return void
     */
    public function initialize(array $options = []): void
    {
        //
    }
    
    /**
     * Instance of Application.
     *
     * @param ...$attributes
     *
     * @return static
     */
    public static function instance(...$attributes): static
    {
        if (null === static::$instance) {
            static::$instance = new static(...$attributes);
        }
        
        return static::$instance;
    }
    
    /**
     * Get the new instance with arguments.
     *
     * @param ...$args
     *
     * @return static
     */
    public static function with(...$attributes): static
    {
        return static::instance(...$attributes);
    }
}