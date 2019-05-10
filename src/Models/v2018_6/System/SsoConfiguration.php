<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class SsoConfiguration Version v2018_6
 *
 * Model for SsoConfiguration
 *
 * @property Carbon $samlCertificateValidFrom
 * @property Carbon $samlCertificateValidTo
 * @property Metadata $_info
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
        '_info' => Metadata::class,
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
        'ssoType' => 'string'
    ];
}
