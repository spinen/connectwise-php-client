<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableWorkRoleLevel Version v2018_5
 *
 * Model for TaxableWorkRoleLevel
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\TaxCodeLevelReference $taxCodeLevel
 * @property integer $id
 */
class TaxableWorkRoleLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'id' => 'integer',
        'taxCodeLevel' => 'Spinen\ConnectWise\Models\v2018_5\Finance\TaxCodeLevelReference',
    ];
}
