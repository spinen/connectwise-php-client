<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyNoteType Version v2018_6
 *
 * Model for CompanyNoteType
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property bool $importFlag
 * @property int $id
 * @property string $identifier
 * @property string $name
 */
class CompanyNoteType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'importFlag' => 'boolean',
        'name' => 'string',
    ];
}
