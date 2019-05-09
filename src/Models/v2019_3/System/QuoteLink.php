<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class QuoteLink Version v2019_3
 * 
 * Model for QuoteLink
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference $location
 * @property string $link
 * @property boolean $allLocationsFlag
 * @property boolean $newWindowFlag
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
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
        'location' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference',
        'link' => 'string',
        'allLocationsFlag' => 'boolean',
        'newWindowFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
