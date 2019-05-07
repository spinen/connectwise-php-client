<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class QuoteLink
 *
 * @property integer $id
 * @property string $link
 * @property boolean $allLocationsFlag
 * @property boolean $newWindowFlag
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
        'link' => 'string',
        'allLocationsFlag' => 'boolean',
        'newWindowFlag' => 'boolean',
    ];
}
