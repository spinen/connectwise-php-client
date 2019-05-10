<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class NoteType Version v2018_4
 *
 * Model for NoteType
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $importFlag
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class NoteType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'importFlag' => 'boolean',
        'name' => 'string',
    ];
}
