<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SsoConfiguration
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
 * @property carbon $samlCertificateValidFrom
 * @property carbon $samlCertificateValidTo
 * @property array $locationIds
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
        'samlCertificateValidFrom' => 'carbon',
        'samlCertificateValidTo' => 'carbon',
        'locationIds' => 'array',
    ];
}
