<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyType Version v2018_6
 *
 * Model for CompanyType
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $serviceAlertFlag
 * @property boolean $vendorFlag
 * @property integer $id
 * @property string $name
 * @property string $serviceAlertMessage
 */
class CompanyType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'serviceAlertFlag' => 'boolean',
        'serviceAlertMessage' => 'string',
        'vendorFlag' => 'boolean',
    ];
}
