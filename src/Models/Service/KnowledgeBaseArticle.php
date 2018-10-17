<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

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
