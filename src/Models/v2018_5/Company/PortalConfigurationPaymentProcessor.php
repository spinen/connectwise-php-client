<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationPaymentProcessor
 *
 * @property integer $id
 * @property string $name
 * @property string $testURL
 */
class PortalConfigurationPaymentProcessor extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'testURL' => 'string',
    ];
}
