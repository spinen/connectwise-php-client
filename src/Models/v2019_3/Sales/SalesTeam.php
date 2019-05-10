<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeam Version v2019_3
 *
 * Model for SalesTeam
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SystemLocationReference $salesTeamLocation
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $salesTeamDescription
 * @property string $salesTeamIdentifier
 */
class SalesTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'salesTeamDescription' => 'string',
        'salesTeamIdentifier' => 'string',
        'salesTeamLocation' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SystemLocationReference',
    ];
}
