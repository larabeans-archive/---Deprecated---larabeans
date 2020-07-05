<?php
namespace App\Containers\Authentication\Models;

use Laravel\Passport\Client as OAuthClient;
use Ramsey\Uuid\Uuid;

class Client extends OAuthClient
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
          $model->{$model->getKeyName()} = Uuid::uuid4()->toString();
        });
    }
}
