<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeXRef Version v2018_5
 * 
 * Model for TaxCodeXRef
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
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\TaxCodeReference $taxCode
 * @property array $taxableLevels
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
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
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_5\Finance\TaxCodeReference',
        'taxableLevels' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
