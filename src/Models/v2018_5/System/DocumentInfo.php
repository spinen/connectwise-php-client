<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DocumentInfo Version v2018_5
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
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
