<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Certification Version v2019_5
 *
 * Model for Certification
 *
 * @property CompanyReference $company
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class Certification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'company' => CompanyReference::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
