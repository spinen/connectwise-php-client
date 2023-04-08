<?php

namespace Spinen\ConnectWise\Models\v2018_6\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class LinkClicked Version v2018_6
 *
 * Model for LinkClicked
 *
 * @property Carbon $dateClicked
 * @property int $campaignId
 * @property int $contactId
 * @property int $id
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
        'dateClicked' => Carbon::class,
        'id' => 'integer',
        'queryString' => 'string',
        'url' => 'string',
    ];
}
