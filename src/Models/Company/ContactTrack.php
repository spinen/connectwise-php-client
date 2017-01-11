<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class ContactTrack extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'              => 'integer',
        'trackId'         => 'integer',
        'name'            => 'string',
        'startDate'       => 'string',
        'endDate'         => 'string',
        'actionTaken'     => 'integer',
        'actionRemaining' => 'integer',
        'startedBy'       => 'string',
        //        'company'         => 'CompanyReference',
        //        'contact'         => 'ContactReference',
        //        '_info'           => 'Metadata',
    ];
}
