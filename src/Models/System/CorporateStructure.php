<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class CorporateStructure extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'levelCount' => 'string',
        'level1Name' => 'string',
        'level2Name' => 'string',
        'level3Name' => 'string',
        'level4Name' => 'string',
        'level5Name' => 'string',
        'fiscalYearStart' => 'string',
        'locationCaption' => 'string',
        'groupCaption' => 'string',
    ];
}
