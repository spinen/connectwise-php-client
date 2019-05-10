<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberCertification Version v2019_1
 *
 * Model for MemberCertification
 *
 * @property Carbon\Carbon $dateExpires
 * @property Carbon\Carbon $dateReceived
 * @property CertificationReference $certification
 * @property CompanyReference $company
 * @property MemberReference $member
 * @property Metadata $_info
 * @property integer $id
 * @property integer $percentComplete
 * @property string $certificationNumber
 * @property string $notes
 */
class MemberCertification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'certification' => CertificationReference::class,
        'certificationNumber' => 'string',
        'company' => CompanyReference::class,
        'dateExpires' => Carbon\Carbon::class,
        'dateReceived' => Carbon\Carbon::class,
        'id' => 'integer',
        'member' => MemberReference::class,
        'notes' => 'string',
        'percentComplete' => 'integer',
    ];
}
