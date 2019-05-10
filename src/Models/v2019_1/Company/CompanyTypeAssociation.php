<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyTypeAssociation Version v2019_1
 *
 * Model for CompanyTypeAssociation
 *
 * @property CompanyReference $company
 * @property CompanyTypeReference $type
 * @property Metadata $_info
 * @property integer $id
 */
class CompanyTypeAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'company' => CompanyReference::class,
        'id' => 'integer',
        'type' => CompanyTypeReference::class
    ];
}
