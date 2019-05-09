<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ClearPickerRequest Version v2018_4
 * 
 * Model for ClearPickerRequest
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Company\MemberReference $member
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
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Company\MemberReference',
        'type' => 'string',
    ];
}