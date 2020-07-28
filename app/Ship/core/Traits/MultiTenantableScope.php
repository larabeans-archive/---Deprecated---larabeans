<?php

namespace Apiato\Core\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Config;

class MultiTenantableScope implements Scope
{
  /**
   * Apply the scope to a given Eloquent query builder.
   *
   * @param  \Illuminate\Database\Eloquent\Builder  $builder
   * @param  \Illuminate\Database\Eloquent\Model  $model
   * @return void
   */
  public function apply(Builder $builder, Model $model)
  {
    if (Config::get('tenant-container.enabled') && !in_array($model->getTable(), Config::get('tenant-container.ignore_tables'))) {
      $builder->where('tenant_id', Config::get('tenant-container.default_id'));
    }
  }
}
