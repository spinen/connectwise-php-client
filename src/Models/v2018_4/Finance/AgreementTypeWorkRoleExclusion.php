<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkRoleExclusion Version v2018_4
 *
 * Model for AgreementTypeWorkRoleExclusion
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\WorkRoleReference $workRole
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Finance\AgreementTypeReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_4\Finance\WorkRoleReference',
    ];
}
