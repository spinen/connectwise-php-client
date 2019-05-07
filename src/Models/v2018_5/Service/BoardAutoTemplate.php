<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardAutoTemplate
 *
 * @property integer $id
 * @property string $summarySetting
 * @property string $discussionSetting
 * @property string $internalAnalysisSetting
 * @property string $resolutionSetting
 * @property string $tasksSetting
 * @property string $documentsSetting
 * @property string $resourcesSetting
 * @property string $budgetHoursSetting
 * @property string $financeInformationSetting
 * @property string $sendNotesAsEmailSetting
 * @property boolean $autoApplyFlag
 */
class BoardAutoTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'summarySetting' => 'string',
        'discussionSetting' => 'string',
        'internalAnalysisSetting' => 'string',
        'resolutionSetting' => 'string',
        'tasksSetting' => 'string',
        'documentsSetting' => 'string',
        'resourcesSetting' => 'string',
        'budgetHoursSetting' => 'string',
        'financeInformationSetting' => 'string',
        'sendNotesAsEmailSetting' => 'string',
        'autoApplyFlag' => 'boolean',
    ];
}
