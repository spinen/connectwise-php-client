<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberSkill Version v2019_3
 *
 * Model for MemberSkill
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\System\SkillReference $skill
 * @property string $skillLevel
 * @property boolean $certifiedFlag
 * @property integer $yearsExperience
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 */
class MemberSkill extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'skill' => 'Spinen\ConnectWise\Models\v2019_3\System\SkillReference',
        'skillLevel' => 'string',
        'certifiedFlag' => 'boolean',
        'yearsExperience' => 'integer',
        'notes' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
