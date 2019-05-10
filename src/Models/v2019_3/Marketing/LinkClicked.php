<?php

namespace Spinen\ConnectWise\Models\v2019_3\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LinkClicked Version v2019_3
 *
 * Model for LinkClicked
 *
 * @property integer $id
 * @property integer $campaignId
 * @property integer $contactId
 * @property Carbon\Carbon $dateClicked
 * @property string $url
 * @property string $queryString
 */
class LinkClicked extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'campaignId' => 'integer',
        'contactId' => 'integer',
        'dateClicked' => 'Carbon\Carbon',
        'url' => 'string',
        'queryString' => 'string',
    ];
}
