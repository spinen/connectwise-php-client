<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyCustomNote Version v2019_1
 * 
 * Model for CompanyCustomNote
 *
 * @property integer $id
 * @property string $customNote
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 */
class CompanyCustomNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customNote' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyStatusReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
    ];
}
