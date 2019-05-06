<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

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
