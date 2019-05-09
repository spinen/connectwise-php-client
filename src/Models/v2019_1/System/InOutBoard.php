<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InOutBoard Version v2019_1
 * 
 * Model for InOutBoard
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\System\InOutTypeReference $inOutType
 * @property string $additionalInfo
 * @property string $dateBack
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 */
class InOutBoard extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'inOutType' => 'Spinen\ConnectWise\Models\v2019_1\System\InOutTypeReference',
        'additionalInfo' => 'string',
        'dateBack' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
