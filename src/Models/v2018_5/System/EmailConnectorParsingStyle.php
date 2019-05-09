<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingStyle Version v2018_5
 * 
 * Model for EmailConnectorParsingStyle
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\System\EmailConnectorParsingTypeReference $parsingType
 * @property string $parseRule
 * @property integer $priority
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class EmailConnectorParsingStyle extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parsingType' => 'Spinen\ConnectWise\Models\v2018_5\System\EmailConnectorParsingTypeReference',
        'parseRule' => 'string',
        'priority' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
