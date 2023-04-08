<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EntityTypeReference Version v2019_1
 *
 * Based on CompanyEntityType Report
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class EntityTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
