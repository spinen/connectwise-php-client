<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OwnershipType
 *
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
        'id' => 'integer',
        'name' => 'string',
    ];
}
