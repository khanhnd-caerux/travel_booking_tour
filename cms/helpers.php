<?php

use Carbon\Carbon;

if (!function_exists('cxl_asset')) {
    /**
     * Generate asset URL with cache busting support
     *
     * @param string $path
     * @return string
     */
    function cxl_asset($path)
    {
        $version = config('app.debug')
            ? Carbon::now()->timestamp
            : config('app.version');

        return asset($path, config('app.force_ssl')) . '?v=' . $version;
    }
}
