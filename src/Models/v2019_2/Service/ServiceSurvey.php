<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurvey Version v2019_2
 *
 * Model for ServiceSurvey
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Service\GenericIdIdentifierReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $notifyMember
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 * @property boolean $footerTextVisibleFlag
 * @property boolean $headerIncludeLogoFlag
 * @property boolean $headerTextVisibleFlag
 * @property boolean $inactiveFlag
 * @property boolean $notifyWhoVisibleFlag
 * @property integer $id
 * @property string $footerText
 * @property string $headerText
 * @property string $name
 * @property string $thankYouText
 */
class ServiceSurvey extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
        'footerText' => 'string',
        'footerTextVisibleFlag' => 'boolean',
        'headerIncludeLogoFlag' => 'boolean',
        'headerText' => 'string',
        'headerTextVisibleFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'notifyMember' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_2\Service\GenericIdIdentifierReference',
        'notifyWhoVisibleFlag' => 'boolean',
        'thankYouText' => 'string',
    ];
}
