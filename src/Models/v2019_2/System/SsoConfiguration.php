<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SsoConfiguration Version v2019_2
 * 
 * Model for SsoConfiguration
 *
 * @property integer $id
 * @property string $name
 * @property string $ssoType
 * @property boolean $inactiveFlag
 * @property string $samlEntityId
 * @property string $samlSignInUrl
 * @property string $samlIdpCertificate
 * @property string $samlCertificateName
 * @property string $samlCertificateIssuedTo
 * @property string $samlCertificateThumbprint
 * @property Carbon\Carbon $samlCertificateValidFrom
 * @property Carbon\Carbon $samlCertificateValidTo
 * @property array $locationIds
 * @property string $clientId
 * @property string $stsBaseUrl
 * @property string $stsUserAdminUrl
 * @property string $token
 * @property integer $submittedMemberCount
 * @property boolean $allMembersSubmitted
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class SsoConfiguration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'ssoType' => 'string',
        'inactiveFlag' => 'boolean',
        'samlEntityId' => 'string',
        'samlSignInUrl' => 'string',
        'samlIdpCertificate' => 'string',
        'samlCertificateName' => 'string',
        'samlCertificateIssuedTo' => 'string',
        'samlCertificateThumbprint' => 'string',
        'samlCertificateValidFrom' => 'Carbon\Carbon',
        'samlCertificateValidTo' => 'Carbon\Carbon',
        'locationIds' => 'array',
        'clientId' => 'string',
        'stsBaseUrl' => 'string',
        'stsUserAdminUrl' => 'string',
        'token' => 'string',
        'submittedMemberCount' => 'integer',
        'allMembersSubmitted' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
