<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

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
