<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Source Version v2019_2
 * 
 * Model for Source
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 * @property string $enteredBy
 * @property Carbon\Carbon $dateEntered
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
        'enteredBy' => 'string',
        'dateEntered' => 'Carbon\Carbon',
    ];
}
