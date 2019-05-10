<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DocumentSetup Version v2019_1
 *
 * Model for DocumentSetup
 *
 * @property integer $id
 * @property boolean $uploadAsLinkFlag
 * @property boolean $isPublicFlag
 * @property string $docPath
 * @property string $templatePath
 * @property string $templateOutputPath
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 */
class DocumentSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'uploadAsLinkFlag' => 'boolean',
        'isPublicFlag' => 'boolean',
        'docPath' => 'string',
        'templatePath' => 'string',
        'templateOutputPath' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
