<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GenericIdIdentifierReference Version v2019_2
 * 
 * Model for GenericIdIdentifierReference
 *
 * @property integer $id
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
