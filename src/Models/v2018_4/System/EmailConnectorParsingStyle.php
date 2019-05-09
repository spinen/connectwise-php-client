<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingStyle Version v2018_4
 * 
 * Model for EmailConnectorParsingStyle
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\System\EmailConnectorParsingTypeReference $parsingType
 * @property string $parseRule
 * @property integer $priority
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
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
        'parsingType' => 'Spinen\ConnectWise\Models\v2018_4\System\EmailConnectorParsingTypeReference',
        'parseRule' => 'string',
        'priority' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
