<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConnectWiseHostedSetup
 *
 * @property integer $id
 * @property integer $screenId
 * @property string $description
 * @property string $url
 * @property string $type
 * @property string $origin
 * @property integer $podHeight
 * @property integer $toolbarButtonDialogHeight
 * @property integer $toolbarButtonDialogWidth
 * @property string $toolbarButtonText
 * @property string $toolbarButtonToolTip
 * @property integer $toolbarButtonIconDocumentId
 * @property boolean $disabledFlag
 * @property array $locationIds
 * @property boolean $locationsEnabledFlag
 * @property string $createdBy
 * @property string $dateCreated
 */
class ConnectWiseHostedSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'screenId' => 'integer',
        'description' => 'string',
        'url' => 'string',
        'type' => 'string',
        'origin' => 'string',
        'podHeight' => 'integer',
        'toolbarButtonDialogHeight' => 'integer',
        'toolbarButtonDialogWidth' => 'integer',
        'toolbarButtonText' => 'string',
        'toolbarButtonToolTip' => 'string',
        'toolbarButtonIconDocumentId' => 'integer',
        'disabledFlag' => 'boolean',
        'locationIds' => 'array',
        'locationsEnabledFlag' => 'boolean',
        'createdBy' => 'string',
        'dateCreated' => 'string',
    ];
}
