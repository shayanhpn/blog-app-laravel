<?php

namespace App\Helpers;

use Illuminate\Support\Str;


class SlugHelper
{
    public static function generateSlug($text)
    {
        $text = preg_replace("/[^آ-یa-zA-Z0-9]/u", '-', $text);
        $text = preg_replace("/-{2,}/", '-', $text);
        $text = trim($text, '-');
        return $text;

    }
}