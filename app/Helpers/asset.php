<?php

if (!function_exists('versionedAsset')) {
    function versionedAsset($path, $secure = null)
    {
        $version = '';
        $filePath = public_path() . DIRECTORY_SEPARATOR . $path;

        if (file_exists($filePath)) {
            $version = '?v=' . filemtime($filePath);
        }

        return app('url')->asset($path, $secure) . $version;
    }
}