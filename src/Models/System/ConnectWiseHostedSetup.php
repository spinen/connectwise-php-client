<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class ConnectWiseHostedSetup extends Model
{
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
