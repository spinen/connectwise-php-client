<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfiguration Version v2018_4
 *
 * Model for PortalConfiguration
 *
 * @property CompanyReference $company
 * @property Metadata $_info
 * @property array $agreementTypeIds
 * @property array $boardIds
 * @property array $configTypeIds
 * @property array $locationIds
 * @property bool $defaultFlag
 * @property bool $displayVendorFlag
 * @property bool $portalImageCopySuccessFlag
 * @property int $id
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
