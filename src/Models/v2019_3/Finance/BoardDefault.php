<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardDefault Version v2019_3
 * 
 * Model for BoardDefault
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ServiceTypeReference $serviceType
 * @property boolean $defaultFlag
 * @property integer $agreementId
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
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
        'board' => 'Spinen\ConnectWise\Models\v2019_3\Finance\BoardReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ServiceTypeReference',
        'defaultFlag' => 'boolean',
        'agreementId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
    ];
}
