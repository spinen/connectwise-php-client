<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketplaceImport Version v2019_4
 *
 * Model for MarketplaceImport
 *
 * @property JObject $marketplaceObject
 * @property array $requiredFields
 * @property integer $id
 * @property string $marketplaceImportType
 */
class MarketplaceImport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'marketplaceImportType' => 'string',
        'marketplaceObject' => JObject::class,
        'requiredFields' => 'array'
    ];
}
