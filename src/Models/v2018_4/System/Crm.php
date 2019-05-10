<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Crm Version v2018_4
 *
 * Model for Crm
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference $accountManagerRole
 * @property Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference $salesRepRole
 * @property Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference $technicalContactRole
 * @property boolean $companyIdGenerationFlag
 * @property boolean $defaultYear
 * @property boolean $excludeSpacesFlag
 * @property boolean $lockProbabilityFlag
 * @property integer $companyListCount
 * @property integer $id
 * @property string $field10Caption
 * @property string $field1Caption
 * @property string $field2Caption
 * @property string $field3Caption
 * @property string $field4Caption
 * @property string $field5Caption
 * @property string $field6Caption
 * @property string $field7Caption
 * @property string $field8Caption
 * @property string $field9Caption
 * @property string $other1Caption
 * @property string $other2Caption
 * @property string $primaryRepCaption
 * @property string $secondaryRepCaption
 */
class Crm extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'accountManagerRole' => 'Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference',
        'companyIdGenerationFlag' => 'boolean',
        'companyListCount' => 'integer',
        'defaultYear' => 'boolean',
        'excludeSpacesFlag' => 'boolean',
        'field10Caption' => 'string',
        'field1Caption' => 'string',
        'field2Caption' => 'string',
        'field3Caption' => 'string',
        'field4Caption' => 'string',
        'field5Caption' => 'string',
        'field6Caption' => 'string',
        'field7Caption' => 'string',
        'field8Caption' => 'string',
        'field9Caption' => 'string',
        'id' => 'integer',
        'lockProbabilityFlag' => 'boolean',
        'other1Caption' => 'string',
        'other2Caption' => 'string',
        'primaryRepCaption' => 'string',
        'salesRepRole' => 'Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference',
        'secondaryRepCaption' => 'string',
        'technicalContactRole' => 'Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference',
    ];
}
