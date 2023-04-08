<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DocumentInfo Version v2019_5
 *
 * Model for DocumentInfo
 *
 * @property Metadata $_info
 * @property bool $htmlTemplateFlag
 * @property bool $imageFlag
 * @property bool $linkFlag
 * @property bool $publicFlag
 * @property bool $readOnlyFlag
 * @property bool $urlFlag
 * @property int $id
 * @property int $size
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
        '_info' => Metadata::class,
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
