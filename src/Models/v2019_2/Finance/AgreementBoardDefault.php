<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementBoardDefault
 *
 * @property integer $id
 * @property boolean $defaultFlag
 * @property integer $agreementId
 */
class AgreementBoardDefault extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'defaultFlag' => 'boolean',
        'agreementId' => 'integer',
    ];
}
