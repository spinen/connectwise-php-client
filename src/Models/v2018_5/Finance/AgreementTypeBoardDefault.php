<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeBoardDefault Version v2018_5
 *
 * Model for AgreementTypeBoardDefault
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\ServiceTypeReference $serviceType
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 */
class AgreementTypeBoardDefault extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Finance\AgreementTypeReference',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\Finance\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_5\Finance\SystemDepartmentReference',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Finance\BoardReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2018_5\Finance\ServiceTypeReference',
        'defaultFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
