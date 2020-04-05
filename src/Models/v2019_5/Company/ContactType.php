<?php

namespace Spinen\ConnectWise\Models\v2019_5\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactType Version v2019_5
 *
 * Model for ContactType
 *
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $serviceAlertFlag
 * @property integer $id
 * @property string $description
 * @property string $serviceAlertMessage
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
        'id' => 'integer',
        'serviceAlertFlag' => 'boolean',
        'serviceAlertMessage' => 'string'
    ];
}
