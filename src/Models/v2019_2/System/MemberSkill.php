<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberSkill
 *
 * @property integer $id
 * @property string $skillLevel
 * @property boolean $certifiedFlag
 * @property integer $yearsExperience
 * @property string $notes
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
        'skillLevel' => 'string',
        'certifiedFlag' => 'boolean',
        'yearsExperience' => 'integer',
        'notes' => 'string',
    ];
}
