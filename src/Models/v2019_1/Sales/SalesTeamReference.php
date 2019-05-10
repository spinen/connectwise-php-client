<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeamReference Version v2019_1
 *
 * Model for SalesTeamReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
 * @property integer $id
 * @property string $identifier
 */
class SalesTeamReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
    ];
}
