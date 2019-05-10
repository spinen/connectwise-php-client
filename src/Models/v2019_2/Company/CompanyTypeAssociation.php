<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyTypeAssociation Version v2019_2
 *
 * Model for CompanyTypeAssociation
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Company\CompanyTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 */
class CompanyTypeAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Company\CompanyTypeReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Company\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
    ];
}
