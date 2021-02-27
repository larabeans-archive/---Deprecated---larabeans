<?php

namespace App\Ship\Parents\Models;

use Apiato\Core\Abstracts\Models\Model as AbstractModel;
use Apiato\Core\Traits\HashIdTrait;
use Apiato\Core\Traits\HasResourceKeyTrait;
use Apiato\Core\Traits\HasUuidsTrait;
use Apiato\Core\Traits\MultiTenantableTrait;

/**
 * Class Model.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
abstract class Model extends AbstractModel
{
    use HashIdTrait;
    use HasResourceKeyTrait;
    use HasUuidsTrait;
    use MultiTenantableTrait;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $keyType = "uuid";
}
