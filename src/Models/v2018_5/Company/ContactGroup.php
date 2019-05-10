<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactGroup Version v2018_5
 *
 * Model for ContactGroup
 *
 * @property ContactReference $contact
 * @property GroupReference $group
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'companyGroupUnsubscribedEmailMessage' => 'string',
        'companyUnsubcribedEmailMessage' => 'string',
        'contact' => ContactReference::class,
        'contactGroupUnsubscribedEmailMessage' => 'string',
        'contactUnsubscribedEmailMessage' => 'string',
        'description' => 'string',
        'group' => GroupReference::class,
        'id' => 'integer',
        'unsubscribeFlag' => 'boolean'
    ];
}
