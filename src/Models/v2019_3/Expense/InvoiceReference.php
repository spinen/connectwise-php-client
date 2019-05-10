<?php

namespace Spinen\ConnectWise\Models\v2019_3\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceReference Version v2019_3
 *
 * Model for InvoiceReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Expense\Metadata $_info
 * @property integer $id
 * @property string $identifier
 */
class InvoiceReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Expense\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
    ];
}
