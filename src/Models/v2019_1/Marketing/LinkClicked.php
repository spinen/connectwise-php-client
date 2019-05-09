<?php

namespace Spinen\ConnectWise\Models\v2019_1\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LinkClicked Version v2019_1
 * 
 * Model for LinkClicked
 *
 * @property integer $id
 * @property integer $campaignId
 * @property integer $contactId
 * @property string $dateClicked
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
        'dateClicked' => 'string',
        'url' => 'string',
        'queryString' => 'string',
    ];
}