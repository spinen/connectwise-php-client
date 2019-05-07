<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactTrack
 *
 * @property integer $id
 * @property integer $trackId
 * @property string $name
 * @property string $startDate
 * @property string $endDate
 * @property integer $actionTaken
 * @property integer $actionRemaining
 * @property string $startedBy
 */
class ContactTrack extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'trackId' => 'integer',
        'name' => 'string',
        'startDate' => 'string',
        'endDate' => 'string',
        'actionTaken' => 'integer',
        'actionRemaining' => 'integer',
        'startedBy' => 'string',
    ];
}
