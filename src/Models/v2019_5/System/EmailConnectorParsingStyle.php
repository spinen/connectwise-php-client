<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingStyle Version v2019_5
 *
 * Model for EmailConnectorParsingStyle
 *
 * @property EmailConnectorParsingTypeReference $parsingType
 * @property Metadata $_info
 * @property integer $id
 * @property integer $priority
 * @property string $parseRule
 */
class EmailConnectorParsingStyle extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'parseRule' => 'string',
        'parsingType' => EmailConnectorParsingTypeReference::class,
        'priority' => 'integer'
    ];
}
