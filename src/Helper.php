<?php

namespace Swiftmade\FEL;

use Swiftmade\FEL\Support\Stringy;
use LaravelCollect\Support\Collection;

class Helper
{
    /**
     * @param $str
     * Converts a string to Stringy object
     * @return \Stringy\Stringy
     */
    public function str($str)
    {
        return Stringy::create($str);
    }

    public function collect(array $array)
    {
        return new Collection($array);
    }

    public function replace(array $dictionary, $subject)
    {
        if (is_array($subject)) {
            return array_map(function ($item) use ($dictionary) {
                return $this->replace($dictionary, $item);
            }, $subject);
        }
        return str_replace(array_keys($dictionary), array_values($dictionary), $subject);
    }
}