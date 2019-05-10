<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class WarehouseBinReference Version v2018_4
 *
 * Model for WarehouseBinReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class WarehouseBinReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
