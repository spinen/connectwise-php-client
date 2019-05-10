<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SsoConfiguration Version v2018_4
 *
 * Model for SsoConfiguration
 *
 * @property Carbon\Carbon $samlCertificateValidFrom
 * @property Carbon\Carbon $samlCertificateValidTo
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property array $locationIds
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $name
 * @property string $samlCertificateIssuedTo
 * @property string $samlCertificateName
 * @property string $samlCertificateThumbprint
 * @property string $samlEntityId
 * @property string $samlIdpCertificate
 * @property string $samlSignInUrl
 * @property string $ssoType
 */
class SsoConfiguration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'locationIds' => 'array',
        'name' => 'string',
        'samlCertificateIssuedTo' => 'string',
        'samlCertificateName' => 'string',
        'samlCertificateThumbprint' => 'string',
        'samlCertificateValidFrom' => 'Carbon\Carbon',
        'samlCertificateValidTo' => 'Carbon\Carbon',
        'samlEntityId' => 'string',
        'samlIdpCertificate' => 'string',
        'samlSignInUrl' => 'string',
        'ssoType' => 'string',
    ];
}
