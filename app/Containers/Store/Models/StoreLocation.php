<?php

namespace App\Containers\Store\Models;

use App\Ship\Parents\Models\Model;

class StoreLocation extends Model
{
    protected $fillable = [
        'branch_id',
        'address_line1',
        'address_line2',
        'zipcode',
        'city',
        'state',
        'country',
        'landline_no1',
        'landline_no2'
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
    protected $resourceKey = 'storelocations';

    public function branch()
    {
        return $this->belongsTo(StoreBranch::class, 'branch_id');
    }
}
