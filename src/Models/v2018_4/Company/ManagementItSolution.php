<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementItSolution
 *
 * @property string $Key
 * @property string $PrivateKey
 */
class ManagementItSolution extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'Key' => 'string',
        'PrivateKey' => 'string',
    ];
}