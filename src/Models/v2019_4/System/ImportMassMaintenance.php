<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ImportMassMaintenance Version v2019_4
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
        'success' => 'boolean'
    ];
}
