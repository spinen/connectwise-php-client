<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactTrack Version v2018_6
 * 
 * Model for ContactTrack
 *
 * @property integer $id
 * @property integer $trackId
 * @property string $name
 * @property string $startDate
 * @property string $endDate
 * @property integer $actionTaken
 * @property integer $actionRemaining
 * @property string $startedBy
 * @property Spinen\ConnectWise\Models\v2018_6\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
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
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Company\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_6\Company\ContactReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
    ];
}
