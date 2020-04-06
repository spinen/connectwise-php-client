<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkRoleExclusion Version v2019_5
 *
 * Model for AgreementWorkRoleExclusion
 *
 * @property Metadata $_info
 * @property WorkRoleReference $workRole
 * @property integer $agreementId
 * @property integer $id
 */
class AgreementWorkRoleExclusion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreementId' => 'integer',
        'id' => 'integer',
        'workRole' => WorkRoleReference::class
    ];
}
