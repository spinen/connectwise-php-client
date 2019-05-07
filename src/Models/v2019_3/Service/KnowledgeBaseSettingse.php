<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KnowledgeBaseSettingse
 *
 * @property integer $id
 * @property boolean $requireApproval
 */
class KnowledgeBaseSettingse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'requireApproval' => 'boolean',
    ];
}
