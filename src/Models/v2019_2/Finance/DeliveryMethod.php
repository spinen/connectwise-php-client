<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DeliveryMethod Version v2019_2
 *
 * Model for DeliveryMethod
 *
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $emailFlag
 * @property boolean $integrationActiveFlag
 * @property boolean $integrationEmailFlag
 * @property boolean $integrationPrintFlag
 * @property integer $id
 * @property string $name
 */
class DeliveryMethod extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'emailFlag' => 'boolean',
        'id' => 'integer',
        'integrationActiveFlag' => 'boolean',
        'integrationEmailFlag' => 'boolean',
        'integrationPrintFlag' => 'boolean',
        'name' => 'string',
    ];
}
