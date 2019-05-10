<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KnowledgeBaseSettings Version v2019_3
 *
 * Model for KnowledgeBaseSettings
 *
 * @property integer $id
 * @property boolean $requireApproval
 * @property Spinen\ConnectWise\Models\v2019_3\Service\MemberReference $defaultApprover
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 */
class KnowledgeBaseSettings extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'requireApproval' => 'boolean',
        'defaultApprover' => 'Spinen\ConnectWise\Models\v2019_3\Service\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
    ];
}
