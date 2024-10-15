<?php

use Carbon\Carbon;

if (!function_exists('formatDate')) {
    function formatDate($dateString)
    {
        Carbon::setLocale('en');
        return Carbon::parse($dateString)->translatedFormat('j F Y');
    }
}
