<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationCrossReference
 *
 * @property integer $id
 * @property string $vendorType
 * @property string $vendorLevel
 * @property boolean $inactiveFlag
 */
class ManagedDevicesIntegrationCrossReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vendorType' => 'string',
        'vendorLevel' => 'string',
        'inactiveFlag' => 'boolean',
    ];
}
