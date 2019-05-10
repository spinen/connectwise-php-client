<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTypeSubTypeItemAssociation Version v2018_5
 *
 * Model for BoardTypeSubTypeItemAssociation
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceSubTypeReference $subType
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceTypeReference $type
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Service\BoardReference',
        'id' => 'integer',
        'item' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceItemReference',
        'subType' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceSubTypeReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceTypeReference',
    ];
}
