<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class DocumentSetup Version v2019_5
 *
 * Model for DocumentSetup
 *
 * @property Metadata $_info
 * @property boolean $isPublicFlag
 * @property boolean $uploadAsLinkFlag
 * @property integer $id
 * @property string $docPath
 * @property string $templateOutputPath
 * @property string $templatePath
 */
class DocumentSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'docPath' => 'string',
        'id' => 'integer',
        'isPublicFlag' => 'boolean',
        'templateOutputPath' => 'string',
        'templatePath' => 'string',
        'uploadAsLinkFlag' => 'boolean'
    ];
}
