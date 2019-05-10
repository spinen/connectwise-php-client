<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Skill Version v2019_3
 *
 * Model for Skill
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\System\SkillCategoryReference $category
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'category' => 'Spinen\ConnectWise\Models\v2019_3\System\SkillCategoryReference',
        'id' => 'integer',
        'name' => 'string',
    ];
}
