<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTypeReference Version v2019_2
 *
 * Model for ExpenseTypeReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ExpenseTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
