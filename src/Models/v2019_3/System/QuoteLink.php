<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class QuoteLink Version v2019_3
 *
 * Model for QuoteLink
 *
 * @property Metadata $_info
 * @property SystemLocationReference $location
 * @property boolean $allLocationsFlag
 * @property boolean $newWindowFlag
 * @property integer $id
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
        'newWindowFlag' => 'boolean'
    ];
}
