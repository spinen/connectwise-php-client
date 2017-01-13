<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

class Survey extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'headerIncludeLogoFlag' => 'boolean',
        'headerText' => 'string',
        'headerTextVisibleFlag' => 'boolean',
        'footerText' => 'string',
        'footerTextVisibleFlag' => 'boolean',
        'thankYouText' => 'string',
        'notifyWhoVisibleFlag' => 'boolean',
    ];
}
