<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KnowledgeBaseSettings Version v2019_2
 *
 * Model for KnowledgeBaseSettings
 *
 * @property MemberReference $defaultApprover
 * @property Metadata $_info
 * @property boolean $requireApproval
 * @property integer $id
 */
class KnowledgeBaseSettings extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultApprover' => MemberReference::class,
        'id' => 'integer',
        'requireApproval' => 'boolean',
    ];
}
