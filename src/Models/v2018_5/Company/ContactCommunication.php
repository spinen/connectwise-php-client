<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactCommunication
 *
 * @property integer $id
 * @property integer $contactId
 * @property string $value
 * @property string $extension
 * @property boolean $defaultFlag
 * @property string $communicationType
 */
class ContactCommunication extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'contactId' => 'integer',
        'value' => 'string',
        'extension' => 'string',
        'defaultFlag' => 'boolean',
        'communicationType' => 'string',
    ];
}
