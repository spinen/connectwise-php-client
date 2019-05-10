<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkRoleExclusion Version v2019_1
 *
 * Model for AgreementTypeWorkRoleExclusion
 *
 * @property AgreementTypeReference $type
 * @property Metadata $_info
 * @property WorkRoleReference $workRole
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'type' => AgreementTypeReference::class,
        'workRole' => WorkRoleReference::class,
    ];
}
