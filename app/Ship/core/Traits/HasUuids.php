<?php

namespace Apiato\Core\Traits;

use Ramsey\Uuid\Uuid;

trait HasUuids
{
    /**
    * Boot function from laravel.
    */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::uuid4()->toString();
        });
    }
}
