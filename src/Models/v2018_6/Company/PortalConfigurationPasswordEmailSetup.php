<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationPasswordEmailSetup Version v2018_6
 *
 * Model for PortalConfigurationPasswordEmailSetup
 *
 * @property Metadata $_info
 * @property boolean $invalidPasswordEmailUseCustomEmailFlag
 * @property boolean $validPasswordEmailUseCustomEmailFlag
 * @property integer $id
 * @property string $invalidPasswordEmailBody
 * @property string $invalidPasswordEmailFromEmail
 * @property string $invalidPasswordEmailFromFirstName
 * @property string $invalidPasswordEmailFromLastName
 * @property string $invalidPasswordEmailSubject
 * @property string $validPasswordEmailBody
 * @property string $validPasswordEmailFromEmail
 * @property string $validPasswordEmailFromFirstName
 * @property string $validPasswordEmailFromLastName
 * @property string $validPasswordEmailSubject
 */
class PortalConfigurationPasswordEmailSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'invalidPasswordEmailBody' => 'string',
        'invalidPasswordEmailFromEmail' => 'string',
        'invalidPasswordEmailFromFirstName' => 'string',
        'invalidPasswordEmailFromLastName' => 'string',
        'invalidPasswordEmailSubject' => 'string',
        'invalidPasswordEmailUseCustomEmailFlag' => 'boolean',
        'validPasswordEmailBody' => 'string',
        'validPasswordEmailFromEmail' => 'string',
        'validPasswordEmailFromFirstName' => 'string',
        'validPasswordEmailFromLastName' => 'string',
        'validPasswordEmailSubject' => 'string',
        'validPasswordEmailUseCustomEmailFlag' => 'boolean',
    ];
}
