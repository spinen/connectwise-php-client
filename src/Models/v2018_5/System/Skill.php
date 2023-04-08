<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Skill Version v2018_5
 *
 * Model for Skill
 *
 * @property Metadata $_info
 * @property SkillCategoryReference $category
 * @property int $id
 * @property string $name
 */
class Skill extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'category' => SkillCategoryReference::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
