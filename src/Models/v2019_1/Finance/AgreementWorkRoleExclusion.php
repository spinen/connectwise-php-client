<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkRoleExclusion Version v2019_1
 *
 * Model for AgreementWorkRoleExclusion
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\WorkRoleReference $workRole
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
        'agreementId' => 'integer',
        'id' => 'integer',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_1\Finance\WorkRoleReference',
    ];
}
