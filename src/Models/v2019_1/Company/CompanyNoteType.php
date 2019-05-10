<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyNoteType Version v2019_1
 *
 * Model for CompanyNoteType
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $importFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
    ];
}
