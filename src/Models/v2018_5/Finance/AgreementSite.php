<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementSite Version v2018_5
 *
 * Model for AgreementSite
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\SiteReference $site
 * @property array $customFields
 * @property integer $agreementId
 * @property integer $id
 */
class AgreementSite extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'agreementId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Finance\CompanyReference',
        'customFields' => 'array',
        'id' => 'integer',
        'site' => 'Spinen\ConnectWise\Models\v2018_5\Finance\SiteReference',
    ];
}
