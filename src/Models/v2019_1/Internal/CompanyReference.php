<?php

namespace Spinen\ConnectWise\Models\v2019_1\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyReference Version v2019_1
 *
 * Company or chargeToType is required
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class CompanyReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string'
    ];
}
