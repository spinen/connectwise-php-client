<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DocumentInfo Version v2019_2
 * 
 * Model for DocumentInfo
 *
 * @property integer $id
 * @property string $title
 * @property string $fileName
 * @property string $serverFileName
 * @property string $owner
 * @property boolean $linkFlag
 * @property boolean $imageFlag
 * @property boolean $publicFlag
 * @property boolean $htmlTemplateFlag
 * @property boolean $readOnlyFlag
 * @property integer $size
 * @property boolean $urlFlag
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class DocumentInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'fileName' => 'string',
        'serverFileName' => 'string',
        'owner' => 'string',
        'linkFlag' => 'boolean',
        'imageFlag' => 'boolean',
        'publicFlag' => 'boolean',
        'htmlTemplateFlag' => 'boolean',
        'readOnlyFlag' => 'boolean',
        'size' => 'integer',
        'urlFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
