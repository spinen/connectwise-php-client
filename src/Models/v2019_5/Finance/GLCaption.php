<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLCaption Version v2019_5
 *
 * Model for GLCaption
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $cogs1
 * @property string $cogs10
 * @property string $cogs2
 * @property string $cogs3
 * @property string $cogs4
 * @property string $cogs5
 * @property string $cogs6
 * @property string $cogs7
 * @property string $cogs8
 * @property string $cogs9
 * @property string $segment1
 * @property string $segment10
 * @property string $segment10type
 * @property string $segment1type
 * @property string $segment2
 * @property string $segment2type
 * @property string $segment3
 * @property string $segment3type
 * @property string $segment4
 * @property string $segment4type
 * @property string $segment5
 * @property string $segment5type
 * @property string $segment6
 * @property string $segment6type
 * @property string $segment7
 * @property string $segment7type
 * @property string $segment8
 * @property string $segment8type
 * @property string $segment9
 * @property string $segment9type
 */
class GLCaption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'cogs1' => 'string',
        'cogs10' => 'string',
        'cogs2' => 'string',
        'cogs3' => 'string',
        'cogs4' => 'string',
        'cogs5' => 'string',
        'cogs6' => 'string',
        'cogs7' => 'string',
        'cogs8' => 'string',
        'cogs9' => 'string',
        'id' => 'integer',
        'segment1' => 'string',
        'segment10' => 'string',
        'segment10type' => 'string',
        'segment1type' => 'string',
        'segment2' => 'string',
        'segment2type' => 'string',
        'segment3' => 'string',
        'segment3type' => 'string',
        'segment4' => 'string',
        'segment4type' => 'string',
        'segment5' => 'string',
        'segment5type' => 'string',
        'segment6' => 'string',
        'segment6type' => 'string',
        'segment7' => 'string',
        'segment7type' => 'string',
        'segment8' => 'string',
        'segment8type' => 'string',
        'segment9' => 'string',
        'segment9type' => 'string',
    ];
}
