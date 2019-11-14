<?php

namespace Spinen\ConnectWise\Models\v2019_4\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OwnershipType Version v2019_4
 *
 * Model for OwnershipType
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class OwnershipType extends Model
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