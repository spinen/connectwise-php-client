<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyNote Version v2019_3
 *
 * Model for CompanyNote
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Company\NoteTypeReference $type
 * @property boolean $flagged
 * @property integer $id
 * @property string $enteredBy
 * @property string $text
 */
class CompanyNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Company\CompanyReference',
        'enteredBy' => 'string',
        'flagged' => 'boolean',
        'id' => 'integer',
        'text' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Company\NoteTypeReference',
    ];
}
