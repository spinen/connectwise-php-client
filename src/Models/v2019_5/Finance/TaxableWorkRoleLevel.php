<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableWorkRoleLevel Version v2019_5
 *
 * Model for TaxableWorkRoleLevel
 *
 * @property Metadata $_info
 * @property TaxCodeLevelReference $taxCodeLevel
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'taxCodeLevel' => TaxCodeLevelReference::class
    ];
}
