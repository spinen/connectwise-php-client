<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactDepartmentReference Version v2018_6
 *
 * Model for ContactDepartmentReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ContactDepartmentReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
