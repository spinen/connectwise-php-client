<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class Contact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'                     => 'integer',
        'firstName'              => 'string',
        'lastName'               => 'string',
        //        'type'                   => 'ContactTypeReference',
        //        'company'                => 'CompanyReference',
        //        'site'                   => 'SiteReference',
        'addressLine1'           => 'string',
        'addressLine2'           => 'string',
        'city'                   => 'string',
        'state'                  => 'string',
        'zip'                    => 'string',
        'country'                => 'string',
        //        'relationship'           => 'RelationshipReference',
        //        'department'             => 'ContactDepartmentReference',
        'inactiveFlag'           => 'boolean',
        'defaultMergeContactId'  => 'integer',
        'securityIdentifier'     => 'string',
        'managerContactId'       => 'integer',
        'assistantContactId'     => 'integer',
        'title'                  => 'string',
        'school'                 => 'string',
        'nickName'               => 'string',
        'marriedFlag'            => 'boolean',
        'childrenFlag'           => 'boolean',
        'significantOther'       => 'string',
        'portalPassword'         => 'string',
        'portalSecurityLevel'    => 'integer',
        'disablePortalLoginFlag' => 'boolean',
        'unsubscribeFlag'        => 'boolean',
        //        'gender'                 => 'Enum',
        'birthDay'               => 'string',
        'anniversary'            => 'string',
        //        'presence'               => 'Enum',
        //        'mobileGuid'             => 'Guid',
        'facebookUrl'            => 'string',
        'twitterUrl'             => 'string',
        'linkedInUrl'            => 'string',
        'defaultBillingFlag'     => 'boolean',
        //        'communicationItems'     => 'ContactCommunicationItem[]',
        //        '_info '                 => 'Metadata',
        //        'customFields'           => 'CustomFieldValue[]',
    ];
}
