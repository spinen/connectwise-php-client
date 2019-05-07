<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeBoardDefault
 *
 * @property integer $id
 * @property boolean $defaultFlag
 */
class AgreementTypeBoardDefault extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'defaultFlag' => 'boolean',
    ];
}
