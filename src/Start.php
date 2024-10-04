<?php

namespace XMultiByte\Enhanced;

class Start
{
    /**
     * Constructor
     */
    public function __construct()
    {
        //
    }
    
    /**
     * Helper instance.
     *
     * @return \XMultiByte\Enhanced\Support\Helper
     */
    public static function helper()
    {
        return new Support\Helper();
    }
}