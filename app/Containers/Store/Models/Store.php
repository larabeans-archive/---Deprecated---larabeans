<?php

namespace App\Containers\Store\Models;

use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;
use App\Containers\Store\Models\StoreBranch;
use App\Containers\Store\Models\StoreLocation;

class Store extends Model
{
    //hasContracts: add trait to make contractable


    protected $fillable = [
        'name',
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
    protected $resourceKey = 'stores';


    /**
     * Get the owners of the store
     *
     * Defined it as many to many,
     * because we planned to business model which allow multiple user to share single store
     * Actually this platform tends to provide partner-ship facility
     *
     */
    public function owner()
    {
        return $this->belongsToMany(
            User::class,
            'store_owner',
            'store_id',
            'user_id'
        )->withTimeStamps();;
    }

    public function assignOwner(User $user)
    {
        $this->owner()->attach($user);
        return $this;
    }

    public function branches()
    {
        return $this->hasMany(StoreBranch::class);
    }

    public function locations()
    {
        return $this->hasManyThrough(StoreLocation::class, StoreBranch::class, 'store_id', 'location_id');
    }

    public function departments()
    {
        return $this->hasMany(StoreDepartment::class, 'store_id');
    }


}
