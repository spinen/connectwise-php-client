<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SsoConfiguration Version v2019_2
 *
 * Model for SsoConfiguration
 *
 * @property Carbon\Carbon $samlCertificateValidFrom
 * @property Carbon\Carbon $samlCertificateValidTo
 * @property Metadata $_info
 * @property array $locationIds
 * @property boolean $allMembersSubmitted
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property integer $submittedMemberCount
 * @property string $clientId
 * @property string $name
 * @property string $samlCertificateIssuedTo
 * @property string $samlCertificateName
 * @property string $samlCertificateThumbprint
 * @property string $samlEntityId
 * @property string $samlIdpCertificate
 * @property string $samlSignInUrl
 * @property string $ssoType
 * @property string $stsBaseUrl
 * @property string $stsUserAdminUrl
 * @property string $token
 */
class SsoConfiguration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'allMembersSubmitted' => 'boolean',
        'clientId' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'locationIds' => 'array',
        'name' => 'string',
        'samlCertificateIssuedTo' => 'string',
        'samlCertificateName' => 'string',
        'samlCertificateThumbprint' => 'string',
        'samlCertificateValidFrom' => Carbon\Carbon::class,
        'samlCertificateValidTo' => Carbon\Carbon::class,
        'samlEntityId' => 'string',
        'samlIdpCertificate' => 'string',
        'samlSignInUrl' => 'string',
        'ssoType' => 'string',
        'stsBaseUrl' => 'string',
        'stsUserAdminUrl' => 'string',
        'submittedMemberCount' => 'integer',
        'token' => 'string',
    ];
}
