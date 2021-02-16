<?php

namespace App\Containers\Location\Traits;

use App\Containers\Location\Models\Location;

trait HasMobileLocation
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
