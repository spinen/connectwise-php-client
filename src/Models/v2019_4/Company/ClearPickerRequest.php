<?php

namespace Spinen\ConnectWise\Models\v2019_4\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ClearPickerRequest Version v2019_4
 *
 * Model for ClearPickerRequest
 *
 * @property MemberReference $member
 * @property string $type
 */
class ClearPickerRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'member' => MemberReference::class,
        'type' => 'string'
    ];
}
