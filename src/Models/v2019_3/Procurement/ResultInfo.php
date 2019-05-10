<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ResultInfo Version v2019_3
 *
 * Model for ResultInfo
 *
 * @property ErrorResponseMessage $error
 * @property IRestIdentifiedItem $data
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
        'data' => IRestIdentifiedItem::class,
        'error' => ErrorResponseMessage::class,
        'originalIndex' => 'integer',
        'statusCode' => 'integer',
        'success' => 'boolean',
    ];
}
