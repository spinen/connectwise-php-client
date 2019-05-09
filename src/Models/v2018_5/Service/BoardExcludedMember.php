<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardExcludedMember Version v2018_5
 * 
 * Model for BoardExcludedMember
 *
 * @property integer $id
 * @property integer $memberId
 * @property integer $boardId
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
 */
class BoardExcludedMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'memberId' => 'integer',
        'boardId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
    ];
}
