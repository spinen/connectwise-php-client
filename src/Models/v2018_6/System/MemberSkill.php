<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberSkill Version v2018_6
 *
 * Model for MemberSkill
 *
 * @property MemberReference $member
 * @property Metadata $_info
 * @property SkillReference $skill
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
        '_info' => Metadata::class,
        'certifiedFlag' => 'boolean',
        'id' => 'integer',
        'member' => MemberReference::class,
        'notes' => 'string',
        'skill' => SkillReference::class,
        'skillLevel' => 'string',
        'yearsExperience' => 'integer'
    ];
}
