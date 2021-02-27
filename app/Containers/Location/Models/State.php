<?php

namespace App\Containers\Location\Models;

use App\Ship\Parents\Models\Model;

class State extends Model
{
    protected $fillable = [

    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'states';

    public $incrementing = true;

    protected $keyType = "int";

    public function country() {
        return $this->belongsTo('App\Containers\Location\Models\Country', 'country_id', 'id');
    }

    public function cities() {
        return $this->hasMany('App\Containers\Location\Models\City', 'state_id', 'id');
    }
}
