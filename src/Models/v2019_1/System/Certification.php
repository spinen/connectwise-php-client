<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Certification Version v2019_1
 *
 * Model for Certification
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\System\CompanyReference',
        'id' => 'integer',
        'name' => 'string',
    ];
}
