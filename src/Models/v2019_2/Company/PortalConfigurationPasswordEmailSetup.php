<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

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
    ];
}
