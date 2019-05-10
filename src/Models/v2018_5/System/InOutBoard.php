<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InOutBoard Version v2018_5
 *
 * Model for InOutBoard
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\System\InOutTypeReference $inOutType
 * @property string $additionalInfo
 * @property Carbon\Carbon $dateBack
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
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
        'member' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        'inOutType' => 'Spinen\ConnectWise\Models\v2018_5\System\InOutTypeReference',
        'additionalInfo' => 'string',
        'dateBack' => 'Carbon\Carbon',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
