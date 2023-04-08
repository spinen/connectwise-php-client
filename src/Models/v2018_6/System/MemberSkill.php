<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberSkill Version v2018_6
 *
 * Model for MemberSkill
 *
 * @property MemberReference $member
 * @property Metadata $_info
 * @property SkillReference $skill
 * @property bool $certifiedFlag
 * @property int $id
 * @property int $yearsExperience
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
        'yearsExperience' => 'integer',
    ];
}
