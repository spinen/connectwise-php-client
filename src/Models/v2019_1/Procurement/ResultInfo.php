<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ResultInfo Version v2019_1
 *
 * Model for ResultInfo
 *
 * @property boolean $success
 * @property integer $originalIndex
 * @property integer $statusCode
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\IRestIdentifiedItem $data
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ErrorResponseMessage $error
 */
class ResultInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'success' => 'boolean',
        'originalIndex' => 'integer',
        'statusCode' => 'integer',
        'data' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\IRestIdentifiedItem',
        'error' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ErrorResponseMessage',
    ];
}
