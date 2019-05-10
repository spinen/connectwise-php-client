<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ImportMassMaintenance Version v2018_5
 *
 * Model for ImportMassMaintenance
 *
 * @property boolean $success
 * @property integer $deletedCompanyCount
 * @property integer $deletedContactCount
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
