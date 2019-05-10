<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CorporateStructure Version v2018_4
 *
 * Model for CorporateStructure
 *
 * @property CurrencyReference $baseCurrency
 * @property MemberReference $chiefOperatingOfficer
 * @property MemberReference $controller
 * @property MemberReference $dispatcher
 * @property MemberReference $dutyManager
 * @property MemberReference $president
 * @property MemberReference $serviceManager
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'baseCurrency' => CurrencyReference::class,
        'chiefOperatingOfficer' => MemberReference::class,
        'controller' => MemberReference::class,
        'dispatcher' => MemberReference::class,
        'dutyManager' => MemberReference::class,
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
        'president' => MemberReference::class,
        'serviceManager' => MemberReference::class,
    ];
}
