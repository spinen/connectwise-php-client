<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PageValues Version v2019_2
 * 
 * Model for PageValues
 *
 * @property integer $page
 * @property integer $pageSize
 * @property integer $pageId
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
        'pageSize' => 'integer',
        'pageId' => 'integer',
    ];
}
