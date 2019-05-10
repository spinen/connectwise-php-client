<?php

namespace Spinen\ConnectWise\Models\v2019_3\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class LinkClicked Version v2019_3
 *
 * Model for LinkClicked
 *
 * @property Carbon $dateClicked
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
        'dateClicked' => Carbon::class,
        'id' => 'integer',
        'queryString' => 'string',
        'url' => 'string'
    ];
}
