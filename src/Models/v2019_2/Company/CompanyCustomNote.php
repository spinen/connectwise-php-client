<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyCustomNote Version v2019_2
 *
 * Model for CompanyCustomNote
 *
 * @property CompanyReference $company
 * @property CompanyStatusReference $status
 * @property Metadata $_info
 * @property integer $id
 * @property string $customNote
 */
class CompanyCustomNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'company' => CompanyReference::class,
        'customNote' => 'string',
        'id' => 'integer',
        'status' => CompanyStatusReference::class
    ];
}
