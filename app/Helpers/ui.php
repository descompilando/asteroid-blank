<?php

if (!function_exists('active_class')) {
    function active_class($selected, $id)
    {
        return ($selected == $id ? 'active' : '');
    }
}

if (!function_exists('class_string')) {
    function class_string($values)
    {
        return $values ? implode(' ', $values) : '';
    }
}