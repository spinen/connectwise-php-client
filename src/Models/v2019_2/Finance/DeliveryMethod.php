<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DeliveryMethod
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $emailFlag
 * @property boolean $integrationEmailFlag
 * @property boolean $integrationPrintFlag
 * @property boolean $integrationActiveFlag
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
    ];
}
