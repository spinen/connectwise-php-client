<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberCertification
 *
 * @property integer $id
 * @property integer $percentComplete
 * @property carbon $dateReceived
 * @property carbon $dateExpires
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
        'id' => 'integer',
        'percentComplete' => 'integer',
        'dateReceived' => 'carbon',
        'dateExpires' => 'carbon',
        'certificationNumber' => 'string',
        'notes' => 'string',
    ];
}
