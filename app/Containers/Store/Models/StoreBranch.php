<?php

namespace App\Containers\Store\Models;

use App\Ship\Parents\Models\Model;
use App\Containers\Store\Models\Store;
use App\Containers\Store\Models\StoreLocation;

class StoreBranch extends Model
{
    protected $fillable = [
        'store_id',
        'name'
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
    protected $resourceKey = 'storebranches';


    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function location()
    {
        return $this->hasOne(StoreLocation::class, 'branch_id');
    }


}
