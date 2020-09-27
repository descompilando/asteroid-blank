<?php

use App\Exceptions\SentryReport;

if (!function_exists('report')) {
    function report(Exception $exception) {
        SentryReport::report($exception);
    }
}