<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTypeSubTypeItemAssociation Version v2019_3
 *
 * Model for BoardTypeSubTypeItemAssociation
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceSubTypeReference $subType
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceTypeReference $type
 * @property integer $id
 */
class BoardTypeSubTypeItemAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\Service\BoardReference',
        'id' => 'integer',
        'item' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceItemReference',
        'subType' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceSubTypeReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceTypeReference',
    ];
}
