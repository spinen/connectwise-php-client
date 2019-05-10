<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableProductTypeLevel Version v2018_6
 *
 * Model for TaxableProductTypeLevel
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeLevelReference $taxCodeLevel
 * @property integer $id
 */
class TaxableProductTypeLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'id' => 'integer',
        'taxCodeLevel' => 'Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeLevelReference',
    ];
}
