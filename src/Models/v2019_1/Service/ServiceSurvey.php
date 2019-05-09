<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurvey Version v2019_1
 * 
 * Model for ServiceSurvey
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property boolean $headerIncludeLogoFlag
 * @property string $headerText
 * @property boolean $headerTextVisibleFlag
 * @property string $footerText
 * @property boolean $footerTextVisibleFlag
 * @property string $thankYouText
 * @property Spinen\ConnectWise\Models\v2019_1\Service\GenericIdIdentifierReference $notifyWho
 * @property boolean $notifyWhoVisibleFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Service\MemberReference $notifyMember
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 */
class ServiceSurvey extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'headerIncludeLogoFlag' => 'boolean',
        'headerText' => 'string',
        'headerTextVisibleFlag' => 'boolean',
        'footerText' => 'string',
        'footerTextVisibleFlag' => 'boolean',
        'thankYouText' => 'string',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_1\Service\GenericIdIdentifierReference',
        'notifyWhoVisibleFlag' => 'boolean',
        'notifyMember' => 'Spinen\ConnectWise\Models\v2019_1\Service\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
    ];
}
