<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DeliveryMethod Version v2018_5
 * 
 * Model for DeliveryMethod
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $emailFlag
 * @property boolean $integrationEmailFlag
 * @property boolean $integrationPrintFlag
 * @property boolean $integrationActiveFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 */
class DeliveryMethod extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'emailFlag' => 'boolean',
        'integrationEmailFlag' => 'boolean',
        'integrationPrintFlag' => 'boolean',
        'integrationActiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
