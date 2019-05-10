<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingStyle Version v2019_2
 *
 * Model for EmailConnectorParsingStyle
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\System\EmailConnectorParsingTypeReference $parsingType
 * @property string $parseRule
 * @property integer $priority
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
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
        'parsingType' => 'Spinen\ConnectWise\Models\v2019_2\System\EmailConnectorParsingTypeReference',
        'parseRule' => 'string',
        'priority' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
