<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardItemAssociation Version v2019_1
 * 
 * Model for BoardItemAssociation
 *
 * @property integer $id
 * @property array $subTypeAssociationIds
 * @property boolean $addAllSubTypesFlag
 * @property boolean $removeAllSubTypesFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2019_1\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 */
class BoardItemAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subTypeAssociationIds' => 'array',
        'addAllSubTypesFlag' => 'boolean',
        'removeAllSubTypesFlag' => 'boolean',
        'item' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceItemReference',
        'board' => 'Spinen\ConnectWise\Models\v2019_1\Service\BoardReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
    ];
}
