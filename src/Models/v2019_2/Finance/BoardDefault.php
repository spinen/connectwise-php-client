<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardDefault Version v2019_2
 *
 * Model for BoardDefault
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property ServiceTypeReference $serviceType
 * @property bool $defaultFlag
 * @property int $agreementId
 * @property int $id
 */
class BoardDefault extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreementId' => 'integer',
        'board' => BoardReference::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'serviceType' => ServiceTypeReference::class,
    ];
}
