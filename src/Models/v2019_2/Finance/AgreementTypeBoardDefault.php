<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeBoardDefault Version v2019_2
 * 
 * Model for AgreementTypeBoardDefault
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ServiceTypeReference $serviceType
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Finance\AgreementTypeReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SystemDepartmentReference',
        'board' => 'Spinen\ConnectWise\Models\v2019_2\Finance\BoardReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ServiceTypeReference',
        'defaultFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
    ];
}
