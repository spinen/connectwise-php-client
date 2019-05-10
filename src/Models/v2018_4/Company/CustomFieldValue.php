<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomFieldValue Version v2018_4
 *
 * Model for CustomFieldValue
 *
 * @property integer $id
 * @property string $caption
 * @property string $type
 * @property string $entryMethod
 * @property integer $numberOfDecimals
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
        'id' => 'integer',
        'caption' => 'string',
        'type' => 'string',
        'entryMethod' => 'string',
        'numberOfDecimals' => 'integer',
        'value' => 'string',
    ];
}
