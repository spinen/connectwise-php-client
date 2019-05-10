<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberSkill Version v2019_3
 *
 * Model for MemberSkill
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\System\SkillReference $skill
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'certifiedFlag' => 'boolean',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'notes' => 'string',
        'skill' => 'Spinen\ConnectWise\Models\v2019_3\System\SkillReference',
        'skillLevel' => 'string',
        'yearsExperience' => 'integer',
    ];
}
