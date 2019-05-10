<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class IntegratorLoginReference Version v2019_1
 *
 * Model for IntegratorLoginReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class IntegratorLoginReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
