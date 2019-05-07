<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Source
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property string $enteredBy
 * @property carbon $dateEntered
 */
class Source extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'enteredBy' => 'string',
        'dateEntered' => 'carbon',
    ];
}
