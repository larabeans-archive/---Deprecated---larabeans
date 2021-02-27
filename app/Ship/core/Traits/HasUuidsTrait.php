<?php

namespace Apiato\Core\Traits;

use Illuminate\Support\Str;

/**
 * Class HashIdTrait.
 *
 * @author  Syed Ali Kazmi <ali@kazmi.me>
 */
trait HasUuidsTrait
{
    /**
    * Boot function from laravel.
    */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if(!$model->incrementing){
                if(!$model->{$model->getKeyName()})
                    $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
