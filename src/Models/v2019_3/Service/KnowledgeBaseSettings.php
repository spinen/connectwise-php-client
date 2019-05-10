<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KnowledgeBaseSettings Version v2019_3
 *
 * Model for KnowledgeBaseSettings
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\MemberReference $defaultApprover
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'defaultApprover' => 'Spinen\ConnectWise\Models\v2019_3\Service\MemberReference',
        'id' => 'integer',
        'requireApproval' => 'boolean',
    ];
}
