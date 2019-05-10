<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyTypeReference Version v2018_5
 *
 * Model for CompanyTypeReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class CompanyTypeReference extends Model
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
