<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Crm Version v2019_5
 *
 * Model for Crm
 *
 * @property Metadata $_info
 * @property TeamRoleReference $accountManagerRole
 * @property TeamRoleReference $salesRepRole
 * @property TeamRoleReference $technicalContactRole
 * @property bool $companyIdGenerationFlag
 * @property bool $defaultYear
 * @property bool $excludeSpacesFlag
 * @property bool $lockProbabilityFlag
 * @property int $companyListCount
 * @property int $id
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
        '_info' => Metadata::class,
        'accountManagerRole' => TeamRoleReference::class,
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
        'salesRepRole' => TeamRoleReference::class,
        'secondaryRepCaption' => 'string',
        'technicalContactRole' => TeamRoleReference::class,
    ];
}
