<?php

namespace App\Containers\Location\Traits;

use App\Containers\Location\Models\Location;

trait HasMobileLocation
{

  /**
   * Get the entity's locations.
   *
   * @return \Illuminate\Database\Eloquent\Relations\MorphOne
   */
  public function location()
  {
    return $this->morphOne(Location::class, 'locatable')->orderBy('created_at', 'desc');
  }

}
