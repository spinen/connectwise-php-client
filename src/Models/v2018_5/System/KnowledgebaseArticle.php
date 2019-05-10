<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class KnowledgebaseArticle Version v2018_5
 *
 * A list of knowledge base articles that the member is the approver
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 */
class KnowledgebaseArticle extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => MemberReference::class
    ];
}
