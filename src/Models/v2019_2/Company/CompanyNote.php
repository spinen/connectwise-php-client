<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyNote
 *
 * @property integer $id
 * @property string $text
 * @property boolean $flagged
 * @property string $enteredBy
 */
class CompanyNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'text' => 'string',
        'flagged' => 'boolean',
        'enteredBy' => 'string',
    ];
}
