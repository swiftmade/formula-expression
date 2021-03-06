<?php

namespace Swiftmade\FEL\Casts;

use Swiftmade\FEL\Contracts\CastContract;

class Collection implements CastContract
{
    public function type()
    {
        return \Illuminate\Support\Collection::class;
    }

    public function cast($value)
    {
        return $value->toArray();
    }

}