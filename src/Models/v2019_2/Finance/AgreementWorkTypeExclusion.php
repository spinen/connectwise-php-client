<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkTypeExclusion Version v2019_2
 *
 * Model for AgreementWorkTypeExclusion
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\WorkTypeReference $workType
 * @property integer $agreementId
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 */
class AgreementWorkTypeExclusion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'workType' => 'Spinen\ConnectWise\Models\v2019_2\Finance\WorkTypeReference',
        'agreementId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
    ];
}
