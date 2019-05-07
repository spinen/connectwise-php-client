<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement
 *
 * @property integer $id
 * @property string $deviceIdentifier
 */
class Agreement extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'deviceIdentifier' => 'string',
    ];
}
