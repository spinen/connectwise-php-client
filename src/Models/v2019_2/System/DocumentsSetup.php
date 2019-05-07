<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DocumentsSetup
 *
 * @property integer $id
 * @property boolean $uploadAsLinkFlag
 * @property boolean $isPublicFlag
 * @property string $docPath
 * @property string $templatePath
 * @property string $templateOutputPath
 */
class DocumentsSetup extends Model
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
    ];
}
