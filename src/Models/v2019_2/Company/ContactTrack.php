<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactTrack Version v2019_2
 *
 * Model for ContactTrack
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 * @property integer $actionRemaining
 * @property integer $actionTaken
 * @property integer $id
 * @property integer $trackId
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
        'actionRemaining' => 'integer',
        'actionTaken' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Company\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Company\ContactReference',
        'endDate' => 'string',
        'id' => 'integer',
        'name' => 'string',
        'startDate' => 'string',
        'startedBy' => 'string',
        'trackId' => 'integer',
    ];
}
