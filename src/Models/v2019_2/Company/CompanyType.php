<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyType Version v2019_2
 *
 * Model for CompanyType
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'serviceAlertFlag' => 'boolean',
        'serviceAlertMessage' => 'string',
        'vendorFlag' => 'boolean'
    ];
}
