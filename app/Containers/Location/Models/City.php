<?php

namespace App\Containers\Location\Models;

use App\Ship\Parents\Models\Model;

class City extends Model
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
    protected $resourceKey = 'cities';

    public function country() {
        return $this->belongsTo('App\Containers\Location\Models\Country', 'country_id', 'id');
    }

    public function state() {
        return $this->belongsTo('App\Containers\Location\Models\State', 'state_id', 'id');
    }
}
