<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkTypeExclusion Version v2019_3
 *
 * Model for AgreementTypeWorkTypeExclusion
 *
 * @property AgreementTypeReference $type
 * @property Metadata $_info
 * @property WorkTypeReference $workType
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'type' => AgreementTypeReference::class,
        'workType' => WorkTypeReference::class,
    ];
}
