<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLAccount Version v2019_2
 *
 * Model for GLAccount
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\MappedRecordReference $mappedRecord
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\MappedTypeReference $mappedType
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 * @property integer $id
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
 * @property string $glType
 * @property string $inventory
 * @property string $productId
 * @property string $salesCode
 * @property string $segment1
 * @property string $segment10
 * @property string $segment2
 * @property string $segment3
 * @property string $segment4
 * @property string $segment5
 * @property string $segment6
 * @property string $segment7
 * @property string $segment8
 * @property string $segment9
 */
class GLAccount extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
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
        'glType' => 'string',
        'id' => 'integer',
        'inventory' => 'string',
        'mappedRecord' => 'Spinen\ConnectWise\Models\v2019_2\Finance\MappedRecordReference',
        'mappedType' => 'Spinen\ConnectWise\Models\v2019_2\Finance\MappedTypeReference',
        'productId' => 'string',
        'salesCode' => 'string',
        'segment1' => 'string',
        'segment10' => 'string',
        'segment2' => 'string',
        'segment3' => 'string',
        'segment4' => 'string',
        'segment5' => 'string',
        'segment6' => 'string',
        'segment7' => 'string',
        'segment8' => 'string',
        'segment9' => 'string',
    ];
}
