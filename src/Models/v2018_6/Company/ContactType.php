<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactType Version v2018_6
 *
 * Model for ContactType
 *
 * @property integer $id
 * @property string $description
 * @property boolean $defaultFlag
 * @property boolean $serviceAlertFlag
 * @property string $serviceAlertMessage
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 */
class ContactType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'defaultFlag' => 'boolean',
        'serviceAlertFlag' => 'boolean',
        'serviceAlertMessage' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
    ];
}
