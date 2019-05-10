<?php

namespace Spinen\ConnectWise\Models\v2018_4\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceReference Version v2018_4
 *
 * Model for InvoiceReference
 *
 * @property integer $id
 * @property string $identifier
 * @property Spinen\ConnectWise\Models\v2018_4\Expense\Metadata $_info
 */
class InvoiceReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Expense\Metadata',
    ];
}
