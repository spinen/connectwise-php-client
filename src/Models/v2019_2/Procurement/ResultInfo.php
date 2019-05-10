<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ResultInfo Version v2019_2
 *
 * Model for ResultInfo
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\ErrorResponseMessage $error
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\IRestIdentifiedItem $data
 * @property boolean $success
 * @property integer $originalIndex
 * @property integer $statusCode
 */
class ResultInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'data' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\IRestIdentifiedItem',
        'error' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\ErrorResponseMessage',
        'originalIndex' => 'integer',
        'statusCode' => 'integer',
        'success' => 'boolean',
    ];
}
