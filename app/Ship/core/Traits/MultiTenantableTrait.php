<?php
namespace Apiato\Core\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class HashIdTrait.
 *
 * @author  Syed Ali Kazmi <ali@kazmi.me>
 */
trait MultiTenantableTrait {

  public static function bootMultiTenantable() {

    if (auth()->check()) {
      static::creating(function ($model) {
        $model->tenant_id = auth()->tenant_id();
      });

      // if user is not administrator - role_id 1
      if (auth()->user()->role_id != 1) {
        static::addGlobalScope('tenant_id', function (Builder $builder) {
          $builder->where('tenant_id', auth()->tenant_id());
        });
      }
    }

  }

}
