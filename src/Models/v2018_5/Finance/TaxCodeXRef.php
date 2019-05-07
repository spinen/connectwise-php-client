<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeXRef
 *
 * @property integer $id
 * @property string $description
 * @property boolean $defaultFlag
 * @property string $levelOne
 * @property string $levelTwo
 * @property string $levelThree
 * @property string $levelFour
 * @property string $levelFive
 * @property string $levelSix
 * @property array $taxableLevels
 */
class TaxCodeXRef extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'defaultFlag' => 'boolean',
        'levelOne' => 'string',
        'levelTwo' => 'string',
        'levelThree' => 'string',
        'levelFour' => 'string',
        'levelFive' => 'string',
        'levelSix' => 'string',
        'taxableLevels' => 'array',
    ];
}
