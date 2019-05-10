<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardReference Version v2018_4
 *
 * Model for ProjectBoardReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\Metadata $_info
 */
class ProjectBoardReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Sales\Metadata',
    ];
}
