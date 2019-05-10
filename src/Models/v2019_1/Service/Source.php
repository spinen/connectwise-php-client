<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Source Version v2019_1
 *
 * Model for Source
 *
 * @property Carbon\Carbon $dateEntered
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $enteredBy
 * @property string $name
 */
class Source extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
        'dateEntered' => 'Carbon\Carbon',
        'defaultFlag' => 'boolean',
        'enteredBy' => 'string',
        'id' => 'integer',
        'name' => 'string',
    ];
}
