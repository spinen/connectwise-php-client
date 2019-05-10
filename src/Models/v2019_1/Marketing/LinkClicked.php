<?php

namespace Spinen\ConnectWise\Models\v2019_1\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LinkClicked Version v2019_1
 *
 * Model for LinkClicked
 *
 * @property Carbon\Carbon $dateClicked
 * @property integer $campaignId
 * @property integer $contactId
 * @property integer $id
 * @property string $queryString
 * @property string $url
 */
class LinkClicked extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'campaignId' => 'integer',
        'contactId' => 'integer',
        'dateClicked' => 'Carbon\Carbon',
        'id' => 'integer',
        'queryString' => 'string',
        'url' => 'string',
    ];
}
