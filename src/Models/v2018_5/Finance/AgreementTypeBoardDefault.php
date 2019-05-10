<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeBoardDefault Version v2018_5
 *
 * Model for AgreementTypeBoardDefault
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\ServiceTypeReference $serviceType
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\SystemLocationReference $location
 * @property boolean $defaultFlag
 * @property integer $id
 */
class AgreementTypeBoardDefault extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Finance\BoardReference',
        'defaultFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2018_5\Finance\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\Finance\SystemLocationReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2018_5\Finance\ServiceTypeReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Finance\AgreementTypeReference',
    ];
}
