<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeBoardDefault Version v2019_3
 *
 * Model for AgreementTypeBoardDefault
 *
 * @property AgreementTypeReference $type
 * @property BoardReference $board
 * @property Metadata $_info
 * @property ServiceTypeReference $serviceType
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
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
        '_info' => Metadata::class,
        'board' => BoardReference::class,
        'defaultFlag' => 'boolean',
        'department' => SystemDepartmentReference::class,
        'id' => 'integer',
        'location' => SystemLocationReference::class,
        'serviceType' => ServiceTypeReference::class,
        'type' => AgreementTypeReference::class
    ];
}
