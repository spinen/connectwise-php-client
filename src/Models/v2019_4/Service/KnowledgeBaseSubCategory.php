<?php

namespace Spinen\ConnectWise\Models\v2019_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KnowledgeBaseSubCategory Version v2019_4
 *
 * Model for KnowledgeBaseSubCategory
 *
 * @property KBCategoryReference $category
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property int $id
 * @property string $name
 */
class KnowledgeBaseSubCategory extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'category' => KBCategoryReference::class,
        'department' => SystemDepartmentReference::class,
        'id' => 'integer',
        'location' => SystemLocationReference::class,
        'name' => 'string',
    ];
}
