<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ImportMassMaintenance Version v2019_1
 *
 * Model for ImportMassMaintenance
 *
 * @property bool $success
 * @property int $deletedCompanyCount
 * @property int $deletedContactCount
 * @property string $message
 */
class ImportMassMaintenance extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'deletedCompanyCount' => 'integer',
        'deletedContactCount' => 'integer',
        'message' => 'string',
        'success' => 'boolean',
    ];
}
