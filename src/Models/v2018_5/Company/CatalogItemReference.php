<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogItemReference Version v2018_5
 *
 * Model for CatalogItemReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class CatalogItemReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string'
    ];
}
