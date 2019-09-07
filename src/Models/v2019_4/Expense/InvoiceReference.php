<?php

namespace Spinen\ConnectWise\Models\v2019_4\Expense;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceReference Version v2019_4
 *
 * Model for InvoiceReference
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string'
    ];
}
