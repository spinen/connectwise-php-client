<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PageValues Version v2019_5
 *
 * Model for PageValues
 *
 * @property int $page
 * @property int $pageId
 * @property int $pageSize
 */
class PageValues extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'page' => 'integer',
        'pageId' => 'integer',
        'pageSize' => 'integer',
    ];
}
