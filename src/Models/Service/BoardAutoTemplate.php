<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

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
