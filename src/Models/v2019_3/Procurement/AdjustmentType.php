<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentType Version v2019_3
 *
 * Model for AdjustmentType
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property boolean $auditTrailFlag
 * @property Carbon\Carbon $dateCreated
 * @property string $createdBy
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 */
class AdjustmentType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'auditTrailFlag' => 'boolean',
        'dateCreated' => 'Carbon\Carbon',
        'createdBy' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
    ];
}
