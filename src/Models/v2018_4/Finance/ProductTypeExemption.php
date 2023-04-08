<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductTypeExemption Version v2018_4
 *
 * Model for ProductTypeExemption
 *
 * @property Metadata $_info
 * @property ProductTypeReference $productType
 * @property TaxCodeReference $taxCode
 * @property bool $levelFiveFlag
 * @property bool $levelFourFlag
 * @property bool $levelOneFlag
 * @property bool $levelSixFlag
 * @property bool $levelThreeFlag
 * @property bool $levelTwoFlag
 * @property int $id
 */
class ProductTypeExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'levelFiveFlag' => 'boolean',
        'levelFourFlag' => 'boolean',
        'levelOneFlag' => 'boolean',
        'levelSixFlag' => 'boolean',
        'levelThreeFlag' => 'boolean',
        'levelTwoFlag' => 'boolean',
        'productType' => ProductTypeReference::class,
        'taxCode' => TaxCodeReference::class,
    ];
}
