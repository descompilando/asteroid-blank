<?php

if (!function_exists('phone')) {
    function phone($number)
    {
        if (strlen($number) === 10)
            return  '(' . substr($number, 0, 2) . ') ' . substr($number, 2, 4) . '-' . substr($number, 6);

         if (strlen($number) === 11)
            return'(' . substr($number, 0, 2) . ') ' . substr($number, 2, 5) . '-' . substr($number, 7);


        return $number;
    }
}
if (!function_exists('cepMask')) {
    function cepMask($cep)
    {
        $cep = str_replace('-', '', $cep);
        $cep = str_replace(' ', '', $cep);

        return substr($cep, 0, 5) . '-' . substr($cep, 5, 3);
    }
}
