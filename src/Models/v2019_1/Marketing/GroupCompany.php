<?php

namespace Spinen\ConnectWise\Models\v2019_1\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GroupCompany
 *
 * @property integer $id
 * @property integer $groupId
 * @property boolean $defaultContactFlag
 * @property boolean $allContactsFlag
 * @property boolean $unsubscribeFlag
 */
class GroupCompany extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'groupId' => 'integer',
        'defaultContactFlag' => 'boolean',
        'allContactsFlag' => 'boolean',
        'unsubscribeFlag' => 'boolean',
    ];
}
