<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardExcludedMember Version v2018_4
 *
 * Model for BoardExcludedMember
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 * @property integer $boardId
 * @property integer $id
 * @property integer $memberId
 */
class BoardExcludedMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
        'boardId' => 'integer',
        'id' => 'integer',
        'memberId' => 'integer',
    ];
}
