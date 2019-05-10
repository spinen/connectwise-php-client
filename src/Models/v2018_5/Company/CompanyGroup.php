<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyGroup Version v2018_5
 *
 * Model for CompanyGroup
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Company\GroupReference $group
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference $company
 * @property boolean $defaultContactFlag
 * @property boolean $allContactsFlag
 * @property boolean $removeAllContactsFlag
 * @property boolean $unsubscribeFlag
 * @property array $contactIds
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
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
        'group' => 'Spinen\ConnectWise\Models\v2018_5\Company\GroupReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference',
        'defaultContactFlag' => 'boolean',
        'allContactsFlag' => 'boolean',
        'removeAllContactsFlag' => 'boolean',
        'unsubscribeFlag' => 'boolean',
        'contactIds' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
    ];
}
