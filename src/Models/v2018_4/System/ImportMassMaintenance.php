<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ImportMassMaintenance Version v2018_4
 *
 * Model for ImportMassMaintenance
 *
 * @property integer $deletedContactCount
 * @property integer $deletedCompanyCount
 * @property string $message
 * @property boolean $success
 */
class ImportMassMaintenance extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'deletedContactCount' => 'integer',
        'deletedCompanyCount' => 'integer',
        'message' => 'string',
        'success' => 'boolean',
    ];
}
