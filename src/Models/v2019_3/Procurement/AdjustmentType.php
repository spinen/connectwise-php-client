<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentType Version v2019_3
 *
 * Model for AdjustmentType
 *
 * @property Carbon\Carbon $dateCreated
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 * @property boolean $auditTrailFlag
 * @property integer $id
 * @property string $createdBy
 * @property string $identifier
 * @property string $name
 */
class AdjustmentType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
        'auditTrailFlag' => 'boolean',
        'createdBy' => 'string',
        'dateCreated' => 'Carbon\Carbon',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
