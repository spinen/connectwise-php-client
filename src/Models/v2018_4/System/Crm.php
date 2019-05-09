<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Crm Version v2018_4
 * 
 * Model for Crm
 *
 * @property integer $id
 * @property integer $companyListCount
 * @property boolean $lockProbabilityFlag
 * @property Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference $accountManagerRole
 * @property Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference $technicalContactRole
 * @property Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference $salesRepRole
 * @property boolean $companyIdGenerationFlag
 * @property boolean $excludeSpacesFlag
 * @property string $field1Caption
 * @property string $field2Caption
 * @property string $field3Caption
 * @property string $field4Caption
 * @property string $field5Caption
 * @property string $field6Caption
 * @property string $field7Caption
 * @property string $field8Caption
 * @property string $field9Caption
 * @property string $field10Caption
 * @property string $primaryRepCaption
 * @property string $secondaryRepCaption
 * @property string $other1Caption
 * @property string $other2Caption
 * @property boolean $defaultYear
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 */
class Crm extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'companyListCount' => 'integer',
        'lockProbabilityFlag' => 'boolean',
        'accountManagerRole' => 'Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference',
        'technicalContactRole' => 'Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference',
        'salesRepRole' => 'Spinen\ConnectWise\Models\v2018_4\System\TeamRoleReference',
        'companyIdGenerationFlag' => 'boolean',
        'excludeSpacesFlag' => 'boolean',
        'field1Caption' => 'string',
        'field2Caption' => 'string',
        'field3Caption' => 'string',
        'field4Caption' => 'string',
        'field5Caption' => 'string',
        'field6Caption' => 'string',
        'field7Caption' => 'string',
        'field8Caption' => 'string',
        'field9Caption' => 'string',
        'field10Caption' => 'string',
        'primaryRepCaption' => 'string',
        'secondaryRepCaption' => 'string',
        'other1Caption' => 'string',
        'other2Caption' => 'string',
        'defaultYear' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
