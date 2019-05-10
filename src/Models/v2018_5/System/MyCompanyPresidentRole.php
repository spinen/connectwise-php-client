<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MyCompanyPresidentRole Version v2018_5
 *
 * Model for MyCompanyPresidentRole
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $reAssignToMember
 * @property integer $count
 */
class MyCompanyPresidentRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
    ];
}
