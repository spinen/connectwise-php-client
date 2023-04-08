<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLPath Version v2019_5
 *
 * Model for GLPath
 *
 * @property Carbon $lastPaymentSync
 * @property MemberReference $lastPaymentSyncBy
 * @property Metadata $_info
 * @property SystemLocationReference $location
 * @property int $id
 * @property string $databaseName
 * @property string $path
 * @property string $sqlServerName
 */
class GLPath extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'databaseName' => 'string',
        'id' => 'integer',
        'lastPaymentSync' => Carbon::class,
        'lastPaymentSyncBy' => MemberReference::class,
        'location' => SystemLocationReference::class,
        'path' => 'string',
        'sqlServerName' => 'string',
    ];
}
