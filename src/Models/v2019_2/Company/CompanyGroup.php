<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyGroup Version v2019_2
 *
 * Model for CompanyGroup
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Company\GroupReference $group
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 * @property array $contactIds
 * @property boolean $allContactsFlag
 * @property boolean $defaultContactFlag
 * @property boolean $removeAllContactsFlag
 * @property boolean $unsubscribeFlag
 * @property integer $id
 */
class CompanyGroup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
        'allContactsFlag' => 'boolean',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Company\CompanyReference',
        'contactIds' => 'array',
        'defaultContactFlag' => 'boolean',
        'group' => 'Spinen\ConnectWise\Models\v2019_2\Company\GroupReference',
        'id' => 'integer',
        'removeAllContactsFlag' => 'boolean',
        'unsubscribeFlag' => 'boolean',
    ];
}
