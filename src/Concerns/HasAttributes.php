<?php

namespace XMultiByte\Enhanced\Concerns;

use Illuminate\Support\Arr;
use Illuminate\Support\Fluent;

trait HasAttributes
{
    /**
     * @var array
     */
    protected $attributes = [];
    
    /**
     * Get all attributes.
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
    
    /**
     * Set the attributes.
     *
     * @param  array  $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
        
        return $this;
    }
    
    /**
     * Returns an Attribute based on the given key.
     *
     * @param $key
     * @param  null  $default
     *
     * @return null|mixed
     */
    public function getAttribute($key, $default = null)
    {
        return $this->attributes[$key] ?? $default;
    }
    
    /**
     * Set a key and value to attribute.
     *
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function setAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
    }
    
    /**
     * Remove one or many array items from a given array using "dot" notation.
     *
     * @param  float|int|string|array  $keys
     *
     * @return void
     */
    public function deleteAttribute($keys)
    {
        Arr::forget($this->attributes, $keys);
    }
    
    /**
     * Destroy the attributes.
     *
     * @return void
     */
    public function flushAttributes()
    {
        $this->attributes = [];
    }
    
    /**
     * Determine if the given key exists in the provided array.
     *
     * @param $key
     *
     * @return bool
     */
    public function isAttributeExists($key): bool
    {
        return Arr::exists($this->attributes, $key);
    }
    
    /**
     * Dynamically retrieve the value of an attribute.
     *
     * @param  string  $key
     *
     * @return null|mixed
     */
    public function __get(string $key)
    {
        return $this->getAttribute($key);
    }
    
    /**
     * Dynamically set the value of an attribute.
     *
     * @param  string  $key
     * @param $value
     *
     * @return void
     */
    public function __set(string $key, $value): void
    {
        $this->setAttribute($key, $value);
    }
    
    /**
     * Dynamically check if an attribute is set.
     *
     * @param  string  $key
     *
     * @return bool
     */
    public function __isset(string $key): bool
    {
        return $this->isAttributeExists($key);
    }
    
    /**
     * Dynamically unset an attribute.
     *
     * @param  string  $key
     *
     * @return void
     */
    public function __unset(string $key): void
    {
        $this->deleteAttribute($key);
    }
    
    /**
     * Handle dynamic calls to the instance to set attributes.
     *
     * @param  string  $key
     * @param  array  $attributes
     *
     * @return array|$this
     *
     */
    public function __call(string $key, array $attributes)
    {
        if (empty($attributes) && $this->isAttributeExists($key)) {
            return $this->getAttribute($key);
        }
        
        if (count($attributes) > 0) {
            $this->attributes[$key] = reset($attributes);
        }
        else {
            $this->attributes[$key] = true;
        }
        
        return $this;
    }
}