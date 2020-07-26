<?php
namespace Apiato\Core\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Config;

/**
 * Class HashIdTrait.
 *
 * @author  Syed Ali Kazmi <ali@kazmi.me>
 */
trait MultiTenantableTrait {

  public static function bootMultiTenantableTrait() {

    static::creating(function ($model) {
      if(Config::get('tenant-container.enabled') && !in_array($model->getTable(), Config::get('tenant-container.ignore_tables'))){
        if(!$model->tenant_id) {
          if (auth()->check()) {
            $model->tenant_id = auth()->tenant_id();
          } else {
            $model->tenant_id = Config::get('tenant-container.default_id');
          }
        }
      }
    });

    // if user is not administrator - role_id 1
    if (auth()->check()) {
      if (auth()->user()->role_id != 1) {
        static::addGlobalScope('tenant_id', function (Builder $builder) {
          if (Config::get('tenant-container.enabled') && !in_array($builder->model->getTable(), Config::get('tenant-container.ignore_tables'))) {
            $builder->where('tenant_id', Config::get('tenant-container.default_id'));
          }
        });
      }
    }
  }

  // TODO: Handle tenant_id globally while creating new record

}
