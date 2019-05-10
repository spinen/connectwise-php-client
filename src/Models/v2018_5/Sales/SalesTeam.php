<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeam Version v2018_5
 *
 * Model for SalesTeam
 *
 * @property integer $id
 * @property string $salesTeamIdentifier
 * @property string $salesTeamDescription
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SystemLocationReference $salesTeamLocation
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 */
class SalesTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'salesTeamIdentifier' => 'string',
        'salesTeamDescription' => 'string',
        'salesTeamLocation' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SystemLocationReference',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
    ];
}
