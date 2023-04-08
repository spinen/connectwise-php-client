<?php

namespace Spinen\ConnectWise\Models\v2019_5\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Source Version v2019_5
 *
 * Model for Source
 *
 * @property Carbon $dateEntered
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'dateEntered' => Carbon::class,
        'defaultFlag' => 'boolean',
        'enteredBy' => 'string',
        'id' => 'integer',
        'name' => 'string',
    ];
}
