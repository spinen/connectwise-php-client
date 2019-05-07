<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KnowledgeBaseArticle
 *
 * @property integer $id
 * @property string $title
 * @property string $issue
 * @property string $resolution
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property integer $categoryId
 * @property integer $subCategoryId
 * @property string $dateCreated
 * @property string $createdBy
 */
class KnowledgeBaseArticle extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'issue' => 'string',
        'resolution' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'categoryId' => 'integer',
        'subCategoryId' => 'integer',
        'dateCreated' => 'string',
        'createdBy' => 'string',
    ];
}
