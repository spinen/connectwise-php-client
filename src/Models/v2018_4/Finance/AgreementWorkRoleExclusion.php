<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkRoleExclusion
 *
 * @property integer $id
 * @property integer $agreementId
 */
class AgreementWorkRoleExclusion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'agreementId' => 'integer',
    ];
}
