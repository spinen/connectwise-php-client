<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConnectWiseHostedSetup Version v2019_2
 *
 * Model for ConnectWiseHostedSetup
 *
 * @property Metadata $_info
 * @property array $locationIds
 * @property bool $disabledFlag
 * @property bool $locationsEnabledFlag
 * @property int $id
 * @property int $podHeight
 * @property int $screenId
 * @property int $toolbarButtonDialogHeight
 * @property int $toolbarButtonDialogWidth
 * @property int $toolbarButtonIconDocumentId
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
        '_info' => Metadata::class,
        'createdBy' => 'string',
        'dateCreated' => 'string',
        'description' => 'string',
        'disabledFlag' => 'boolean',
        'id' => 'integer',
        'locationIds' => 'array',
        'locationsEnabledFlag' => 'boolean',
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
