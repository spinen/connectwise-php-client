<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeam Version v2019_3
 *
 * Model for SalesTeam
 *
 * @property Metadata $_info
 * @property SystemLocationReference $salesTeamLocation
 * @property bool $inactiveFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'salesTeamDescription' => 'string',
        'salesTeamIdentifier' => 'string',
        'salesTeamLocation' => SystemLocationReference::class,
    ];
}
