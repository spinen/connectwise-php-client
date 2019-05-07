<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementBackup
 *
 * @property integer $id
 * @property string $billingLevel
 */
class ManagementBackup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'billingLevel' => 'string',
    ];
}
