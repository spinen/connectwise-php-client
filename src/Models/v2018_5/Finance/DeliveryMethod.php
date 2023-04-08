<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DeliveryMethod Version v2018_5
 *
 * Model for DeliveryMethod
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property bool $emailFlag
 * @property bool $integrationActiveFlag
 * @property bool $integrationEmailFlag
 * @property bool $integrationPrintFlag
 * @property int $id
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
