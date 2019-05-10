<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PageValues Version v2019_2
 *
 * Model for PageValues
 *
 * @property integer $page
 * @property integer $pageId
 * @property integer $pageSize
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
