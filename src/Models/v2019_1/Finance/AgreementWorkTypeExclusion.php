<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkTypeExclusion Version v2019_1
 *
 * Model for AgreementWorkTypeExclusion
 *
 * @property Metadata $_info
 * @property WorkTypeReference $workType
 * @property integer $agreementId
 * @property integer $id
 */
class AgreementWorkTypeExclusion extends Model
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
        'workType' => WorkTypeReference::class
    ];
}
