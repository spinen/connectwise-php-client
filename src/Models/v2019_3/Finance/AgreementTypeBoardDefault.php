<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeBoardDefault Version v2019_3
 *
 * Model for AgreementTypeBoardDefault
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ServiceTypeReference $serviceType
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\Finance\BoardReference',
        'defaultFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SystemLocationReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ServiceTypeReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Finance\AgreementTypeReference',
    ];
}
