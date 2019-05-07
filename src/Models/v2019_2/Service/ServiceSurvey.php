<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurvey
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
 * @property boolean $notifyWhoVisibleFlag
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
        'notifyWhoVisibleFlag' => 'boolean',
    ];
}
