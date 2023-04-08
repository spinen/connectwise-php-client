<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberCertification Version v2019_5
 *
 * Model for MemberCertification
 *
 * @property Carbon $dateExpires
 * @property Carbon $dateReceived
 * @property CertificationReference $certification
 * @property CompanyReference $company
 * @property MemberReference $member
 * @property Metadata $_info
 * @property int $id
 * @property int $percentComplete
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
        'dateExpires' => Carbon::class,
        'dateReceived' => Carbon::class,
        'id' => 'integer',
        'member' => MemberReference::class,
        'notes' => 'string',
        'percentComplete' => 'integer',
    ];
}
