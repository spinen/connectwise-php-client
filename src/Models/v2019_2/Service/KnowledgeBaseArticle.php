<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KnowledgeBaseArticle Version v2019_2
 * 
 * Model for KnowledgeBaseArticle
 *
 * @property integer $id
 * @property string $title
 * @property string $issue
 * @property string $resolution
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2019_2\Service\BoardReference $board
 * @property integer $categoryId
 * @property integer $subCategoryId
 * @property string $dateCreated
 * @property string $createdBy
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
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
        'board' => 'Spinen\ConnectWise\Models\v2019_2\Service\BoardReference',
        'categoryId' => 'integer',
        'subCategoryId' => 'integer',
        'dateCreated' => 'string',
        'createdBy' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
    ];
}
