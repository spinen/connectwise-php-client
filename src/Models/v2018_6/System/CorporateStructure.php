<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CorporateStructure
 *
 * @property integer $id
 * @property string $levelCount
 * @property string $level1Name
 * @property string $level2Name
 * @property string $level3Name
 * @property string $level4Name
 * @property string $level5Name
 * @property string $fiscalYearStart
 * @property string $locationCaption
 * @property string $groupCaption
 */
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
