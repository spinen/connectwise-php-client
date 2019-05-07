<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyPickerItem
 *
 * @property integer $id
 * @property boolean $vendorPickerFlag
 */
class CompanyPickerItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vendorPickerFlag' => 'boolean',
    ];
}
