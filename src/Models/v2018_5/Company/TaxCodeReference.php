<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeReference Version v2018_5
 *
 * New companies will be created with the default tax code unless otherwise specified.
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class TaxCodeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
