<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactType Version v2018_5
 *
 * Model for ContactType
 *
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $description
 */
class ContactType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'description' => 'string',
        'id' => 'integer'
    ];
}
