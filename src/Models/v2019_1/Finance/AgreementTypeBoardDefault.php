<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeBoardDefault Version v2019_1
 *
 * Model for AgreementTypeBoardDefault
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\ServiceTypeReference $serviceType
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2019_1\Finance\BoardReference',
        'defaultFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SystemLocationReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\ServiceTypeReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Finance\AgreementTypeReference',
    ];
}
