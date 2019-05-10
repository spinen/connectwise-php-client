<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTypeSubTypeItemAssociation Version v2018_4
 *
 * Model for BoardTypeSubTypeItemAssociation
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Service\ServiceTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_4\Service\ServiceSubTypeReference $subType
 * @property Spinen\ConnectWise\Models\v2018_4\Service\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2018_4\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 */
class BoardTypeSubTypeItemAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Service\ServiceTypeReference',
        'subType' => 'Spinen\ConnectWise\Models\v2018_4\Service\ServiceSubTypeReference',
        'item' => 'Spinen\ConnectWise\Models\v2018_4\Service\ServiceItemReference',
        'board' => 'Spinen\ConnectWise\Models\v2018_4\Service\BoardReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
    ];
}
