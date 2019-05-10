<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class IntegratorLoginReference Version v2019_2
 *
 * Model for IntegratorLoginReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class IntegratorLoginReference extends Model
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
