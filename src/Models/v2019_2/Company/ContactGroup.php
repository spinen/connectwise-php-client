<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactGroup
 *
 * @property integer $id
 * @property string $description
 * @property boolean $unsubscribeFlag
 * @property string $companyUnsubcribedEmailMessage
 * @property string $companyGroupUnsubscribedEmailMessage
 * @property string $contactUnsubscribedEmailMessage
 * @property string $contactGroupUnsubscribedEmailMessage
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
        'description' => 'string',
        'unsubscribeFlag' => 'boolean',
        'companyUnsubcribedEmailMessage' => 'string',
        'companyGroupUnsubscribedEmailMessage' => 'string',
        'contactUnsubscribedEmailMessage' => 'string',
        'contactGroupUnsubscribedEmailMessage' => 'string',
    ];
}
