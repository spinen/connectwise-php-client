<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberCertification Version v2018_6
 * 
 * Model for MemberCertification
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\System\CertificationReference $certification
 * @property integer $percentComplete
 * @property string $dateReceived
 * @property string $dateExpires
 * @property string $certificationNumber
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2018_6\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\System\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 */
class MemberCertification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'certification' => 'Spinen\ConnectWise\Models\v2018_6\System\CertificationReference',
        'percentComplete' => 'integer',
        'dateReceived' => 'string',
        'dateExpires' => 'string',
        'certificationNumber' => 'string',
        'notes' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\System\MemberReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\System\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
    ];
}
