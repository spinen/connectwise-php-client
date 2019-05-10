<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ReportDataResponse Version v2019_3
 *
 * Model for ReportDataResponse
 *
 * @property array $column_definitions
 * @property array $row_values
 */
class ReportDataResponse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'column_definitions' => 'array',
        'row_values' => 'array',
    ];
}
