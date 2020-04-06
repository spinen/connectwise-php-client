<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingPackage Version v2019_5
 *
 * Model for AccountingPackage
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class AccountingPackage extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string'
    ];
}
