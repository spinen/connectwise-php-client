<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyStatusReference Version v2018_6
 *
 * Required when notifyType is set to: "Change Company Status"
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class CompanyStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
