<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkRoleExclusion Version v2019_1
 *
 * Model for AgreementTypeWorkRoleExclusion
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\WorkRoleReference $workRole
 * @property integer $id
 */
class AgreementTypeWorkRoleExclusion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Finance\AgreementTypeReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_1\Finance\WorkRoleReference',
    ];
}
