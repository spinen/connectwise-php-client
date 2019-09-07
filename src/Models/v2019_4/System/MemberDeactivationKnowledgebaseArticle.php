<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationKnowledgebaseArticle Version v2019_4
 *
 * A list of knowledge base articles that the member is the approver
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 */
class MemberDeactivationKnowledgebaseArticle extends Model
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
