<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfiguration Version v2019_1
 *
 * Model for PortalConfiguration
 *
 * @property CompanyReference $company
 * @property Metadata $_info
 * @property array $agreementTypeIds
 * @property array $boardIds
 * @property array $configTypeIds
 * @property array $locationIds
 * @property boolean $defaultFlag
 * @property boolean $displayVendorFlag
 * @property boolean $portalImageCopySuccessFlag
 * @property integer $id
 * @property string $buttonColor
 * @property string $headerColor
 * @property string $language
 * @property string $loginBackgroundColor
 * @property string $menuColor
 * @property string $name
 * @property string $portalBackgroundColor
 * @property string $url
 * @property string $welcomeText
 */
class PortalConfiguration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreementTypeIds' => 'array',
        'boardIds' => 'array',
        'buttonColor' => 'string',
        'company' => CompanyReference::class,
        'configTypeIds' => 'array',
        'defaultFlag' => 'boolean',
        'displayVendorFlag' => 'boolean',
        'headerColor' => 'string',
        'id' => 'integer',
        'language' => 'string',
        'locationIds' => 'array',
        'loginBackgroundColor' => 'string',
        'menuColor' => 'string',
        'name' => 'string',
        'portalBackgroundColor' => 'string',
        'portalImageCopySuccessFlag' => 'boolean',
        'url' => 'string',
        'welcomeText' => 'string',
    ];
}
