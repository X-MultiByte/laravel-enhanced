<?php
const ENHANCED_HELPER_LOADED = true;

if ( !function_exists('enhanced')) {
    /**
     * @return Enahanced
     */
    function enhanced()
    {
        // TODO: enhanced helper instance.
    }
}

if ( !function_exists('arr')) {
    /**
     * @return \Illuminate\Support\Arr
     */
    function arr(): \Illuminate\Support\Arr
    {
        return app('Arr');
    }
}

if ( !function_exists('str')) {
    /**
     * @return \Illuminate\Support\Str
     */
    function str(): \Illuminate\Support\Str
    {
        return app('Str');
    }
}

if ( !function_exists('route_path')) {
    /**
     * Get the route path.
     *
     * @param  string  $path
     *
     * @return void
     */
    function route_path($path = '')
    {
        // TODO: Route Path helper function.
    }
}
