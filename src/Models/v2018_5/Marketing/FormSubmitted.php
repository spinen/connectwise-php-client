<?php

namespace Spinen\ConnectWise\Models\v2018_5\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class FormSubmitted Version v2018_5
 *
 * Model for FormSubmitted
 *
 * @property Carbon $dateSubmitted
 * @property int $campaignId
 * @property int $contactId
 * @property int $id
 * @property string $pageSubType
 * @property string $pageType
 * @property string $queryString
 * @property string $status
 * @property string $topic
 * @property string $url
 * @property string $version
 */
class FormSubmitted extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'campaignId' => 'integer',
        'contactId' => 'integer',
        'dateSubmitted' => Carbon::class,
        'id' => 'integer',
        'pageSubType' => 'string',
        'pageType' => 'string',
        'queryString' => 'string',
        'status' => 'string',
        'topic' => 'string',
        'url' => 'string',
        'version' => 'string',
    ];
}
