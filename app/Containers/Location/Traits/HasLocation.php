<?php

namespace App\Containers\Location\Traits;

use App\Containers\Location\Models\Location;

trait HasLocation
{

  /**
   * Get the entity's location.
   *
   * @return \Illuminate\Database\Eloquent\Relations\MorphOne
   */
  public function location()
  {
    return $this->morphOne(Location::class, 'locatable')->orderBy('created_at', 'desc');
  }

}
