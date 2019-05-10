<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeXRef Version v2018_6
 *
 * Model for TaxCodeXRef
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference $taxCode
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'defaultFlag' => 'boolean',
        'description' => 'string',
        'id' => 'integer',
        'levelFive' => 'string',
        'levelFour' => 'string',
        'levelOne' => 'string',
        'levelSix' => 'string',
        'levelThree' => 'string',
        'levelTwo' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference',
        'taxableLevels' => 'array',
    ];
}
