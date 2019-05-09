<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationPasswordEmailSetup Version v2019_2
 * 
 * Model for PortalConfigurationPasswordEmailSetup
 *
 * @property integer $id
 * @property boolean $validPasswordEmailUseCustomEmailFlag
 * @property string $validPasswordEmailFromFirstName
 * @property string $validPasswordEmailFromLastName
 * @property string $validPasswordEmailFromEmail
 * @property string $validPasswordEmailSubject
 * @property string $validPasswordEmailBody
 * @property boolean $invalidPasswordEmailUseCustomEmailFlag
 * @property string $invalidPasswordEmailFromFirstName
 * @property string $invalidPasswordEmailFromLastName
 * @property string $invalidPasswordEmailFromEmail
 * @property string $invalidPasswordEmailSubject
 * @property string $invalidPasswordEmailBody
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 */
class PortalConfigurationPasswordEmailSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'validPasswordEmailUseCustomEmailFlag' => 'boolean',
        'validPasswordEmailFromFirstName' => 'string',
        'validPasswordEmailFromLastName' => 'string',
        'validPasswordEmailFromEmail' => 'string',
        'validPasswordEmailSubject' => 'string',
        'validPasswordEmailBody' => 'string',
        'invalidPasswordEmailUseCustomEmailFlag' => 'boolean',
        'invalidPasswordEmailFromFirstName' => 'string',
        'invalidPasswordEmailFromLastName' => 'string',
        'invalidPasswordEmailFromEmail' => 'string',
        'invalidPasswordEmailSubject' => 'string',
        'invalidPasswordEmailBody' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
    ];
}
