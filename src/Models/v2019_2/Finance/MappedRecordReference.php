<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MappedRecordReference Version v2019_2
 *
 * Model for MappedRecordReference
 *
 * @property int $id
 * @property string $name
 */
class MappedRecordReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
    ];
}
