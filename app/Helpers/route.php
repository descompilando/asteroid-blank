<?php

use Illuminate\Support\Str;

if (!function_exists('home_route')) {
    function home_route() {
        return route('home');
    }
}
