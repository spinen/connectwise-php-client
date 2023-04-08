<?php

namespace Spinen\ConnectWise\Models\v2019_4\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExternalExpenseTypeIntegrationReference Version v2019_4
 *
 * Model for ExternalExpenseTypeIntegrationReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $identifier
 * @property string $name
 */
class ExternalExpenseTypeIntegrationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
