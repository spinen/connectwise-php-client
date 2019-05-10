<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactType Version v2018_6
 *
 * Model for ContactType
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
        'defaultFlag' => 'boolean',
        'description' => 'string',
        'id' => 'integer',
        'serviceAlertFlag' => 'boolean',
        'serviceAlertMessage' => 'string',
    ];
}
