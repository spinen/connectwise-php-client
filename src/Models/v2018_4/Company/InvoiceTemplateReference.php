<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceTemplateReference Version v2018_4
 *
 * Model for InvoiceTemplateReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class InvoiceTemplateReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
