<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ParsingVariable Version v2019_3
 * 
 * Model for ParsingVariable
 *
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 */
class ParsingVariable extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'code' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
