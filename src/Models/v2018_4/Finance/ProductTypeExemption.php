<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductTypeExemption Version v2018_4
 *
 * Model for ProductTypeExemption
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ProductTypeReference $productType
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 * @property boolean $levelFiveFlag
 * @property boolean $levelFourFlag
 * @property boolean $levelOneFlag
 * @property boolean $levelSixFlag
 * @property boolean $levelThreeFlag
 * @property boolean $levelTwoFlag
 * @property integer $id
 */
class ProductTypeExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
        'id' => 'integer',
        'levelFiveFlag' => 'boolean',
        'levelFourFlag' => 'boolean',
        'levelOneFlag' => 'boolean',
        'levelSixFlag' => 'boolean',
        'levelThreeFlag' => 'boolean',
        'levelTwoFlag' => 'boolean',
        'productType' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ProductTypeReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference',
    ];
}
