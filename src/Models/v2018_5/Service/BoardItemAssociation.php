<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardItemAssociation Version v2018_5
 *
 * Model for BoardItemAssociation
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceItemReference $item
 * @property array $subTypeAssociationIds
 * @property boolean $addAllSubTypesFlag
 * @property boolean $removeAllSubTypesFlag
 * @property integer $id
 */
class BoardItemAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
        'addAllSubTypesFlag' => 'boolean',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Service\BoardReference',
        'id' => 'integer',
        'item' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceItemReference',
        'removeAllSubTypesFlag' => 'boolean',
        'subTypeAssociationIds' => 'array',
    ];
}
