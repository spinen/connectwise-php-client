<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SkillCategory Version v2019_4
 *
 * Model for SkillCategory
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class SkillCategory extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
