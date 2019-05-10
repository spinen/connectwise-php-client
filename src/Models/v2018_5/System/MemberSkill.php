<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberSkill Version v2018_5
 *
 * Model for MemberSkill
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\System\SkillReference $skill
 * @property boolean $certifiedFlag
 * @property integer $id
 * @property integer $yearsExperience
 * @property string $notes
 * @property string $skillLevel
 */
class MemberSkill extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'certifiedFlag' => 'boolean',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        'notes' => 'string',
        'skill' => 'Spinen\ConnectWise\Models\v2018_5\System\SkillReference',
        'skillLevel' => 'string',
        'yearsExperience' => 'integer',
    ];
}
