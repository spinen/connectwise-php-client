<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ResultInfo Version v2019_1
 *
 * Model for ResultInfo
 *
 * @property ErrorResponseMessage $error
 * @property IRestIdentifiedItem $data
 * @property bool $success
 * @property int $originalIndex
 * @property int $statusCode
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
