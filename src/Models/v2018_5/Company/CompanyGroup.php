<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyGroup
 *
 * @property integer $id
 * @property boolean $defaultContactFlag
 * @property boolean $allContactsFlag
 * @property boolean $removeAllContactsFlag
 * @property boolean $unsubscribeFlag
 * @property array $contactIds
 */
class CompanyGroup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'defaultContactFlag' => 'boolean',
        'allContactsFlag' => 'boolean',
        'removeAllContactsFlag' => 'boolean',
        'unsubscribeFlag' => 'boolean',
        'contactIds' => 'array',
    ];
}
