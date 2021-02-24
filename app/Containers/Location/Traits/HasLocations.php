<?php

namespace App\Containers\Location\Traits;

use Apiato\Core\Traits\MultiTenantableScope;
use App\Containers\Location\Models\Location;
use Illuminate\Support\Facades\Config;

trait HasLocations
{

  /**
   * Get the entity's locations.
   *
   * @return \Illuminate\Database\Eloquent\Relations\MorphMany
   */
  public function locations()
  {
    return $this->morphMany(Location::class, 'locatable')->orderBy('created_at', 'desc');
  }

}
