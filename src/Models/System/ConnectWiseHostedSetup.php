<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class ConnectWiseHostedSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'                           => 'integer',
        'screenId'                     => 'integer',
        'description'                  => 'string',
        'url'                          => 'string',
//        'type'                         => 'Enum',
        'origin'                       => 'string',
        'podHeight'                    => 'integer',
        'toolbarButtonDialogHeight'    => 'integer',
        'toolbarButtonDialogWidth'     => 'integer',
        'toolbarButtonText'            => 'string',
        'toolbarButtonToolTip'         => 'string',
        'toolbarButtonIconDocumentId ' => 'integer',
        'disabledFlag'                 => 'boolean',
        'createdBy '                   => 'string',
        'dateCreated '                 => 'string',
//        '_info'                        => 'Metadata',
    ];
}
