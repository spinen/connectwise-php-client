<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesOrderReference Version v2018_6
 *
 * Model for SalesOrderReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $identifier
 */
class SalesOrderReference extends Model
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
    ];
}
