<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactTrack Version v2019_1
 *
 * Model for ContactTrack
 *
 * @property CompanyReference $company
 * @property ContactReference $contact
 * @property Metadata $_info
 * @property int $actionRemaining
 * @property int $actionTaken
 * @property int $id
 * @property int $trackId
 * @property string $endDate
 * @property string $name
 * @property string $startDate
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
        '_info' => Metadata::class,
        'actionRemaining' => 'integer',
        'actionTaken' => 'integer',
        'company' => CompanyReference::class,
        'contact' => ContactReference::class,
        'endDate' => 'string',
        'id' => 'integer',
        'name' => 'string',
        'startDate' => 'string',
        'startedBy' => 'string',
        'trackId' => 'integer',
    ];
}
