<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class QuoteLink Version v2019_2
 *
 * Model for QuoteLink
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $location
 * @property string $link
 * @property boolean $allLocationsFlag
 * @property boolean $newWindowFlag
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class QuoteLink extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'link' => 'string',
        'allLocationsFlag' => 'boolean',
        'newWindowFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
