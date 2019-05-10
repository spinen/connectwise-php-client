<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeam Version v2018_6
 *
 * Model for SalesTeam
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\SystemLocationReference $salesTeamLocation
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Sales\Metadata',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'salesTeamDescription' => 'string',
        'salesTeamIdentifier' => 'string',
        'salesTeamLocation' => 'Spinen\ConnectWise\Models\v2018_6\Sales\SystemLocationReference',
    ];
}
