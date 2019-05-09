<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SystemDepartmentReference Version v2019_1
 * 
 * Model for SystemDepartmentReference
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 */
class SystemDepartmentReference extends Model
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
    ];
}