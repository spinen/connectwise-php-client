<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConnectWiseHostedSetup Version v2018_5
 *
 * Model for ConnectWiseHostedSetup
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property array $locationIds
 * @property boolean $disabledFlag
 * @property integer $id
 * @property integer $podHeight
 * @property integer $screenId
 * @property integer $toolbarButtonDialogHeight
 * @property integer $toolbarButtonDialogWidth
 * @property integer $toolbarButtonIconDocumentId
 * @property string $createdBy
 * @property string $dateCreated
 * @property string $description
 * @property string $origin
 * @property string $toolbarButtonText
 * @property string $toolbarButtonToolTip
 * @property string $type
 * @property string $url
 */
class ConnectWiseHostedSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'createdBy' => 'string',
        'dateCreated' => 'string',
        'description' => 'string',
        'disabledFlag' => 'boolean',
        'id' => 'integer',
        'locationIds' => 'array',
        'origin' => 'string',
        'podHeight' => 'integer',
        'screenId' => 'integer',
        'toolbarButtonDialogHeight' => 'integer',
        'toolbarButtonDialogWidth' => 'integer',
        'toolbarButtonIconDocumentId' => 'integer',
        'toolbarButtonText' => 'string',
        'toolbarButtonToolTip' => 'string',
        'type' => 'string',
        'url' => 'string',
    ];
}
