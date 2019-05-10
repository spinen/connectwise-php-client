<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DocumentSetup Version v2019_2
 *
 * Model for DocumentSetup
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
        'docPath' => 'string',
        'id' => 'integer',
        'isPublicFlag' => 'boolean',
        'templateOutputPath' => 'string',
        'templatePath' => 'string',
        'uploadAsLinkFlag' => 'boolean',
    ];
}
