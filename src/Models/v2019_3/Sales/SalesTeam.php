<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeam
 *
 * @property integer $id
 * @property string $salesTeamIdentifier
 * @property string $salesTeamDescription
 * @property boolean $inactiveFlag
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
        'inactiveFlag' => 'boolean',
    ];
}
