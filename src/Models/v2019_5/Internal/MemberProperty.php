<?php

namespace Spinen\ConnectWise\Models\v2019_5\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberProperty Version v2019_5
 *
 * Model for MemberProperty
 *
 * @property Metadata $_info
 * @property integer $id
 * @property integer $memberRecId
 * @property string $name
 * @property string $value
 */
class MemberProperty extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'memberRecId' => 'integer',
        'name' => 'string',
        'value' => 'string'
    ];
}
