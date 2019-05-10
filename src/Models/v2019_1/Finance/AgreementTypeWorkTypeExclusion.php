<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkTypeExclusion Version v2019_1
 *
 * Model for AgreementTypeWorkTypeExclusion
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\WorkTypeReference $workType
 * @property integer $id
 */
class AgreementTypeWorkTypeExclusion extends Model
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
        'workType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\WorkTypeReference',
    ];
}
