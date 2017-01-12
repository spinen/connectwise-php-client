<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class TaxCodeXRef extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'          => 'integer',
        'description' => 'string',
        'defaultFlag' => 'boolean',
        //        'levelOne'    => 'Enum',
        //        'levelTwo'    => 'Enum',
        //        'levelThree'  => 'Enum',
        //        'levelFour'   => 'Enum',
        //        'levelFive'   => 'Enum',
        //        'taxCode'     => 'TaxCodeReference',
        //        '_info'       => 'Metadata',
    ];
}
