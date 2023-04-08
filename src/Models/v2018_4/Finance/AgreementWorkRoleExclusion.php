<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkRoleExclusion Version v2018_4
 *
 * Model for AgreementWorkRoleExclusion
 *
 * @property Metadata $_info
 * @property WorkRoleReference $workRole
 * @property int $agreementId
 * @property int $id
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
        'workRole' => WorkRoleReference::class,
    ];
}
