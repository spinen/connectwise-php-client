<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CorporateStructure Version v2018_4
 *
 * Model for CorporateStructure
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\CurrencyReference $baseCurrency
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $chiefOperatingOfficer
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $controller
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $dispatcher
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $dutyManager
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $president
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $serviceManager
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property integer $id
 * @property string $fiscalYearStart
 * @property string $groupCaption
 * @property string $level1Name
 * @property string $level2Name
 * @property string $level3Name
 * @property string $level4Name
 * @property string $level5Name
 * @property string $levelCount
 * @property string $locationCaption
 */
class CorporateStructure extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'baseCurrency' => 'Spinen\ConnectWise\Models\v2018_4\System\CurrencyReference',
        'chiefOperatingOfficer' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'controller' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'dispatcher' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'dutyManager' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'fiscalYearStart' => 'string',
        'groupCaption' => 'string',
        'id' => 'integer',
        'level1Name' => 'string',
        'level2Name' => 'string',
        'level3Name' => 'string',
        'level4Name' => 'string',
        'level5Name' => 'string',
        'levelCount' => 'string',
        'locationCaption' => 'string',
        'president' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'serviceManager' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
    ];
}
