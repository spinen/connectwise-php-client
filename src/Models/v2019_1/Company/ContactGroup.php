<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactGroup Version v2019_1
 * 
 * Model for ContactGroup
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Company\GroupReference $group
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ContactReference $contact
 * @property string $description
 * @property boolean $unsubscribeFlag
 * @property string $companyUnsubcribedEmailMessage
 * @property string $companyGroupUnsubscribedEmailMessage
 * @property string $contactUnsubscribedEmailMessage
 * @property string $contactGroupUnsubscribedEmailMessage
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 */
class ContactGroup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'group' => 'Spinen\ConnectWise\Models\v2019_1\Company\GroupReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Company\ContactReference',
        'description' => 'string',
        'unsubscribeFlag' => 'boolean',
        'companyUnsubcribedEmailMessage' => 'string',
        'companyGroupUnsubscribedEmailMessage' => 'string',
        'contactUnsubscribedEmailMessage' => 'string',
        'contactGroupUnsubscribedEmailMessage' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
    ];
}
