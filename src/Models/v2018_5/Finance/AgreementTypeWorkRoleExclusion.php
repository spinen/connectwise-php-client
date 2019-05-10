<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkRoleExclusion Version v2018_5
 *
 * Model for AgreementTypeWorkRoleExclusion
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\WorkRoleReference $workRole
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Finance\AgreementTypeReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_5\Finance\WorkRoleReference',
    ];
}
