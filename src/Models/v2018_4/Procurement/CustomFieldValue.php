<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomFieldValue Version v2018_4
 *
 * Model for CustomFieldValue
 *
 * @property integer $id
 * @property integer $numberOfDecimals
 * @property string $caption
 * @property string $entryMethod
 * @property string $type
 * @property string $value
 */
class CustomFieldValue extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'caption' => 'string',
        'entryMethod' => 'string',
        'id' => 'integer',
        'numberOfDecimals' => 'integer',
        'type' => 'string',
        'value' => 'string'
    ];
}
