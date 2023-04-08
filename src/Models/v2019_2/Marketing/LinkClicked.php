<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class LinkClicked Version v2019_2
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
