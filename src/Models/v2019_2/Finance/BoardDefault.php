<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardDefault Version v2019_2
 *
 * Model for BoardDefault
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ServiceTypeReference $serviceType
 * @property boolean $defaultFlag
 * @property integer $agreementId
 * @property integer $id
 */
class BoardDefault extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
        'agreementId' => 'integer',
        'board' => 'Spinen\ConnectWise\Models\v2019_2\Finance\BoardReference',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'serviceType' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ServiceTypeReference',
    ];
}
