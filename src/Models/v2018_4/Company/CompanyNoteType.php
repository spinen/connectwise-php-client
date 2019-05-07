<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyNoteType
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $importFlag
 */
class CompanyNoteType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'importFlag' => 'boolean',
    ];
}
