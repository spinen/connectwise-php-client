<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyGroup Version v2018_5
 *
 * Model for CompanyGroup
 *
 * @property CompanyReference $company
 * @property GroupReference $group
 * @property Metadata $_info
 * @property array $contactIds
 * @property bool $allContactsFlag
 * @property bool $defaultContactFlag
 * @property bool $removeAllContactsFlag
 * @property bool $unsubscribeFlag
 * @property int $id
 */
class CompanyGroup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'allContactsFlag' => 'boolean',
        'company' => CompanyReference::class,
        'contactIds' => 'array',
        'defaultContactFlag' => 'boolean',
        'group' => GroupReference::class,
        'id' => 'integer',
        'removeAllContactsFlag' => 'boolean',
        'unsubscribeFlag' => 'boolean',
    ];
}
