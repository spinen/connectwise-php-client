<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InOutBoard Version v2019_1
 *
 * Model for InOutBoard
 *
 * @property Carbon\Carbon $dateBack
 * @property Spinen\ConnectWise\Models\v2019_1\System\InOutTypeReference $inOutType
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property integer $id
 * @property string $additionalInfo
 */
class InOutBoard extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'additionalInfo' => 'string',
        'dateBack' => 'Carbon\Carbon',
        'id' => 'integer',
        'inOutType' => 'Spinen\ConnectWise\Models\v2019_1\System\InOutTypeReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
    ];
}
