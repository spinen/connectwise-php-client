<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class SsoConfiguration Version v2019_1
 *
 * Model for SsoConfiguration
 *
 * @property Carbon $samlCertificateValidFrom
 * @property Carbon $samlCertificateValidTo
 * @property Metadata $_info
 * @property array $locationIds
 * @property bool $inactiveFlag
 * @property int $id
 * @property int $submittedMemberCount
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
        'clientId' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'locationIds' => 'array',
        'name' => 'string',
        'samlCertificateIssuedTo' => 'string',
        'samlCertificateName' => 'string',
        'samlCertificateThumbprint' => 'string',
        'samlCertificateValidFrom' => Carbon::class,
        'samlCertificateValidTo' => Carbon::class,
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
