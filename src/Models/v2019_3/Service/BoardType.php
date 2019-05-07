<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardType
 *
 * @property integer $id
 * @property string $name
 * @property string $category
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $requestForChangeFlag
 * @property string $integrationXref
 */
class BoardType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'category' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'requestForChangeFlag' => 'boolean',
        'integrationXref' => 'string',
    ];
}
