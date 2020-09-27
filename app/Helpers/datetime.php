<?php

if (!function_exists('date_time_format')) {
    function date_time_format($dateTime, $currentFormat, $targetFormat) {
        return DateTime::createFromFormat($currentFormat, $dateTime)->format($targetFormat);
    }
}
