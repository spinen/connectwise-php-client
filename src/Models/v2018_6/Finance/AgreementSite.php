<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementSite Version v2018_6
 * 
 * Model for AgreementSite
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $site
 * @property integer $agreementId
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property array $customFields
 */
class AgreementSite extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'site' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'agreementId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'customFields' => 'array',
    ];
}
