<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfiguration
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property string $loginBackgroundColor
 * @property string $portalBackgroundColor
 * @property string $menuColor
 * @property string $buttonColor
 * @property string $headerColor
 * @property string $url
 * @property string $language
 * @property string $welcomeText
 * @property array $boardIds
 * @property array $agreementTypeIds
 * @property array $configTypeIds
 * @property array $locationIds
 * @property boolean $portalImageCopySuccessFlag
 * @property boolean $displayVendorFlag
 */
class PortalConfiguration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'loginBackgroundColor' => 'string',
        'portalBackgroundColor' => 'string',
        'menuColor' => 'string',
        'buttonColor' => 'string',
        'headerColor' => 'string',
        'url' => 'string',
        'language' => 'string',
        'welcomeText' => 'string',
        'boardIds' => 'array',
        'agreementTypeIds' => 'array',
        'configTypeIds' => 'array',
        'locationIds' => 'array',
        'portalImageCopySuccessFlag' => 'boolean',
        'displayVendorFlag' => 'boolean',
    ];
}
