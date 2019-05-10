<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentType Version v2018_4
 *
 * Model for AdjustmentType
 *
 * @property Carbon $dateCreated
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'auditTrailFlag' => 'boolean',
        'createdBy' => 'string',
        'dateCreated' => Carbon::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string'
    ];
}
