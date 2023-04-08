<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class QuoteLink Version v2019_4
 *
 * Model for QuoteLink
 *
 * @property Metadata $_info
 * @property SystemLocationReference $location
 * @property bool $allLocationsFlag
 * @property bool $newWindowFlag
 * @property int $id
 * @property string $link
 */
class QuoteLink extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'allLocationsFlag' => 'boolean',
        'id' => 'integer',
        'link' => 'string',
        'location' => SystemLocationReference::class,
        'newWindowFlag' => 'boolean',
    ];
}
