<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceTemplateSetup Version v2019_1
 *
 * Model for InvoiceTemplateSetup
 *
 * @property integer $id
 * @property string $name
 * @property boolean $customFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 */
class InvoiceTemplateSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'customFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
