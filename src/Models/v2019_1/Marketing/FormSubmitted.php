<?php

namespace Spinen\ConnectWise\Models\v2019_1\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class FormSubmitted Version v2019_1
 * 
 * Model for FormSubmitted
 *
 * @property integer $id
 * @property integer $campaignId
 * @property integer $contactId
 * @property string $dateSubmitted
 * @property string $url
 * @property string $queryString
 * @property string $pageType
 * @property string $pageSubType
 * @property string $topic
 * @property string $version
 * @property string $status
 */
class FormSubmitted extends Model
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
        'dateSubmitted' => 'string',
        'url' => 'string',
        'queryString' => 'string',
        'pageType' => 'string',
        'pageSubType' => 'string',
        'topic' => 'string',
        'version' => 'string',
        'status' => 'string',
    ];
}
