<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DocumentInfo Version v2019_3
 *
 * Model for DocumentInfo
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property boolean $htmlTemplateFlag
 * @property boolean $imageFlag
 * @property boolean $linkFlag
 * @property boolean $publicFlag
 * @property boolean $readOnlyFlag
 * @property boolean $urlFlag
 * @property integer $id
 * @property integer $size
 * @property string $fileName
 * @property string $owner
 * @property string $serverFileName
 * @property string $title
 */
class DocumentInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'fileName' => 'string',
        'htmlTemplateFlag' => 'boolean',
        'id' => 'integer',
        'imageFlag' => 'boolean',
        'linkFlag' => 'boolean',
        'owner' => 'string',
        'publicFlag' => 'boolean',
        'readOnlyFlag' => 'boolean',
        'serverFileName' => 'string',
        'size' => 'integer',
        'title' => 'string',
        'urlFlag' => 'boolean',
    ];
}
