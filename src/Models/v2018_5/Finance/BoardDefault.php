<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardDefault Version v2018_5
 * 
 * Model for BoardDefault
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\ServiceTypeReference $serviceType
 * @property boolean $defaultFlag
 * @property integer $agreementId
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 */
class BoardDefault extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Finance\BoardReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2018_5\Finance\ServiceTypeReference',
        'defaultFlag' => 'boolean',
        'agreementId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
