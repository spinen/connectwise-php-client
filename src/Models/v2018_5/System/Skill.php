<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Skill Version v2018_5
 *
 * Model for Skill
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\System\SkillCategoryReference $category
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'category' => 'Spinen\ConnectWise\Models\v2018_5\System\SkillCategoryReference',
        'id' => 'integer',
        'name' => 'string',
    ];
}
