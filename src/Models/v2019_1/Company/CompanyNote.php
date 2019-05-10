<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyNote Version v2019_1
 *
 * Model for CompanyNote
 *
 * @property integer $id
 * @property string $text
 * @property Spinen\ConnectWise\Models\v2019_1\Company\NoteTypeReference $type
 * @property boolean $flagged
 * @property string $enteredBy
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Company\NoteTypeReference',
        'flagged' => 'boolean',
        'enteredBy' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
    ];
}
