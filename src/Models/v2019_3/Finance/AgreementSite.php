<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementSite Version v2019_3
 *
 * Model for AgreementSite
 *
 * @property CompanyReference $company
 * @property Metadata $_info
 * @property SiteReference $site
 * @property array $customFields
 * @property int $agreementId
 * @property int $id
 */
class AgreementSite extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreementId' => 'integer',
        'company' => CompanyReference::class,
        'customFields' => 'array',
        'id' => 'integer',
        'site' => SiteReference::class,
    ];
}
