<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactGroup Version v2019_2
 *
 * Model for ContactGroup
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_2\Company\GroupReference $group
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 * @property boolean $unsubscribeFlag
 * @property integer $id
 * @property string $companyGroupUnsubscribedEmailMessage
 * @property string $companyUnsubcribedEmailMessage
 * @property string $contactGroupUnsubscribedEmailMessage
 * @property string $contactUnsubscribedEmailMessage
 * @property string $description
 */
class ContactGroup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
        'companyGroupUnsubscribedEmailMessage' => 'string',
        'companyUnsubcribedEmailMessage' => 'string',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Company\ContactReference',
        'contactGroupUnsubscribedEmailMessage' => 'string',
        'contactUnsubscribedEmailMessage' => 'string',
        'description' => 'string',
        'group' => 'Spinen\ConnectWise\Models\v2019_2\Company\GroupReference',
        'id' => 'integer',
        'unsubscribeFlag' => 'boolean',
    ];
}
