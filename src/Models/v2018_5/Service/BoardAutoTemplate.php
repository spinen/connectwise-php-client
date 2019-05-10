<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardAutoTemplate Version v2018_5
 *
 * Model for BoardAutoTemplate
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceSubTypeReference $subtype
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ServiceTemplateReference $serviceTemplate
 * @property Spinen\ConnectWise\Models\v2018_5\Service\BoardReference $board
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
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceTypeReference',
        'subtype' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceSubTypeReference',
        'item' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceItemReference',
        'serviceTemplate' => 'Spinen\ConnectWise\Models\v2018_5\Service\ServiceTemplateReference',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Service\BoardReference',
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
    ];
}
