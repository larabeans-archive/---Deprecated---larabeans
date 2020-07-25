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
        if(Config::get('tenant-container.enabled') && !in_array($model->getTable(), Config::get('tenant-container.ignore_tables'))){
          $model->tenant_id = auth()->tenant_id();
        }
      });

      // if user is not administrator - role_id 1
      if (auth()->user()->role_id != 1) {
        static::addGlobalScope('tenant_id', function (Builder $builder) {
          if(Config::get('tenant-container.enabled') && !in_array($builder->model->getTable(), Config::get('tenant-container.ignore_tables'))){
            $builder->where('tenant_id', auth()->tenant_id());
          }
        });
      }
    }
  }

  // TODO: Handle tenant_id globally while creating new record

}
