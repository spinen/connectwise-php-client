<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KnowledgeBaseArticle Version v2018_5
 *
 * Model for KnowledgeBaseArticle
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property int $businessUnitId
 * @property int $categoryId
 * @property int $id
 * @property int $locationId
 * @property int $subCategoryId
 * @property string $createdBy
 * @property string $dateCreated
 * @property string $issue
 * @property string $resolution
 * @property string $title
 */
class KnowledgeBaseArticle extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'board' => BoardReference::class,
        'businessUnitId' => 'integer',
        'categoryId' => 'integer',
        'createdBy' => 'string',
        'dateCreated' => 'string',
        'id' => 'integer',
        'issue' => 'string',
        'locationId' => 'integer',
        'resolution' => 'string',
        'subCategoryId' => 'integer',
        'title' => 'string',
    ];
}
