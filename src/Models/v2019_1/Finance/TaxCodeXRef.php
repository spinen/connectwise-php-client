<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeXRef Version v2019_1
 *
 * Model for TaxCodeXRef
 *
 * @property Metadata $_info
 * @property TaxCodeReference $taxCode
 * @property array $taxableLevels
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $description
 * @property string $levelFive
 * @property string $levelFour
 * @property string $levelOne
 * @property string $levelSix
 * @property string $levelThree
 * @property string $levelTwo
 */
class TaxCodeXRef extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'description' => 'string',
        'id' => 'integer',
        'levelFive' => 'string',
        'levelFour' => 'string',
        'levelOne' => 'string',
        'levelSix' => 'string',
        'levelThree' => 'string',
        'levelTwo' => 'string',
        'taxCode' => TaxCodeReference::class,
        'taxableLevels' => 'array',
    ];
}
