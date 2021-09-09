<?php

namespace Domain\Users\Models;

use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;

class Password implements CastsInboundAttributes
{

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  \App\Address  $value
     * @param  array  $attributes
     * @return array
     */
    public function set($model, $key, $value, $attributes)
    {
        return  bcrypt($value);
    }
}
