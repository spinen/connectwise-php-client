<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GenericIdIdentifierReference Version v2018_5
 *
 * Model for GenericIdIdentifierReference
 *
 * @property int $id
 * @property string $identifier
 * @property string $name
 */
class GenericIdIdentifierReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
